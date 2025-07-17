<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DataTables;

use App\Models\Program;
use App\Models\ProgramCategory;


class ProgramController extends Controller
{
    /**
     * Tampilkan daftar program di dashboard
     */
    public function index()
    {
        // $program = Program::with('kategori')->get(); // ✅ eager load relasi kategori
        // $kategori = ProgramCategory::all(); // ✅ semua kategori untuk dropdown atau lainnya
        // return view('program.program.index', compact('program', 'kategori'));
        return view('program.program.index');
    }

    /**
     * Simpan program baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_desc' => 'nullable|string|max:255',
            'about' => 'nullable|string',
            'end_date' => 'nullable|date',
            'kategori_program_id' => 'required|exists:program_category,id',
        ]);


        Program::create([
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'about' => $request->about,
            'end_date' => $request->end_date,
            'kategori_program_id' => $request->kategori_program_id
        ]);


        return redirect()->route('program.index')->with('success', 'Program berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit program
     */
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $kategori = ProgramCategory::all(); // ✅ ambil kategori untuk dropdown
        return view('program.program.edit', compact('program', 'kategori'));
    }

    public function show($id)
    {
        $program = Program::findOrFail($id);
        return view('member.program.show', compact('program'));
    }


    /**
     * Update data program
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program'        => 'required|string|max:255',
            'deskripsi'           => 'required|string|max:255',
            'mulai_tanggal'       => 'required|date',
            'status'              => 'required|string',
            'kategori_program_id' => 'required|exists:program_category,id'
        ]);

        $program = Program::findOrFail($id);

        $program->update([
            'nama_program'        => $request->nama_program,
            'deskripsi'           => $request->deskripsi,
            'mulai_tanggal'       => $request->mulai_tanggal,
            'status'              => $request->status,
            'kategori_program_id' => $request->kategori_program_id
        ]);

        return redirect()->route('program.index')->with('success', 'Program berhasil diperbarui!');
    }

    /**
     * Hapus data program
     */
    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->route('program.index')->with('success', 'Program berhasil dihapus!');
    }

    /**
     * Datatables Program
     */
    public function datatablesProgram(Request $request)
    {
        // if ($request->ajax()) {
            $data = Program::orderBy('program.donate_sum', 'DESC');

            if(isset($request->active)) {
                if($request->active==1) {
                    $data = $data->where('is_publish', 1)->where('end_date', '>=', date('Y-m-d'));
                }
            }

            if(isset($request->inactive)) {
                if($request->inactive==1) {
                    $data = $data->where('is_publish', 0);
                }
            }

            if(isset($request->winning)) {
                if($request->winning==1) {
                    $data = $data->where('donate_sum', '>=', 8000000);
                }
            }

            if(isset($request->recom)) {
                if($request->recom==1) {
                    $data = $data->where('is_recommended', 1);
                }
            }

            if(isset($request->urgent)) {
                if($request->urgent==1) {
                    $data = $data->where('is_urgent', 1);
                }
            }

            if(isset($request->newest)) {
                if($request->newest==1) {
                    $data = $data->where('is_show_home', 1);
                }
            }

            if(isset($request->publish15day)) {
                if($request->publish15day==1) {
                    $data = $data->where('program.approved_at', '>=', date('Y-m-d', strtotime(date('Y-m-d').'-15 days')));
                }
            }

            if(isset($request->end15day)) {
                if($request->end15day==1) {
                    $data = $data->where('end_date', '<=', date('Y-m-d', strtotime(date('Y-m-d').'+15 days')));
                }
            }

            if(isset($request->program_title)) {
                $data = $data->where('program.title', 'like', '%'.$request->program_title.'%');
            }

            $order_column = $request->input('order.0.column');
            $order_dir    = ($request->input('order.0.dir')) ? $request->input('order.0.dir') : 'asc';

            $count_total  = $data->count();

            $search       = $request->input('search.value');

            $count_filter = $count_total;
            if($search != ''){
                $data     = $data->where(function ($q) use ($search){
                            $q->where('program.title', 'like', '%'.$search.'%')
                                ->orWhere('program.slug', 'like', '%'.$search.'%')
                                ->orWhere('program.short_desc', 'like', '%'.$search.'%');
                            });
                $count_filter = $data->count();
            }

            $pageSize     = ($request->length) ? $request->length : 10;
            $start        = ($request->start) ? $request->start : 0;

            $data->skip($start)->take($pageSize);

            $data         = $data->get();


            return Datatables::of($data)
                ->with([
                    "recordsTotal"    => $count_total,
                    "recordsFiltered" => $count_filter,
                ])
                ->setOffset($start)
                ->addIndexColumn()
                ->addColumn('nominal', function($row){
                    $sum    = \App\Models\Transaction::where('program_id', $row->id)->where('status', 'success')->sum('nominal_final');
                    if($sum>0) {
                        $sum_percent = round($sum/$row->nominal_approved*100, 2);
                    } else {
                        $sum_percent = 0;
                    }

                    $spend  = \App\Models\ProgramSpend::where('program_id', $row->id)->where('status', 'done')->sum('nominal_approved');
                    if($spend>0 && $sum>0) {
                        $spend_percent = round($spend/$sum*100, 2);
                    } else {
                        $spend_percent = 0;
                    }

                    $param  = $row->id.", '".ucwords(str_replace("'", "", $row->title))."'";

                    return '<span class="badge bg-light" style="cursor:pointer" onclick="showSummary('.$param.')">
                        <i class="fa fa-check-double icon-gradient bg-happy-green"></i> Rp.'.str_replace(',', '.', number_format($row->nominal_approved)).'</span>
                        <br>
                        <span class="badge bg-light modal_status" style="cursor:pointer" onclick="showDonate('.$param.')">
                        <i class="fa fa-money-bill icon-gradient bg-happy-green"></i> Rp.'.number_format($sum).' ('.$sum_percent.'%)</span>
                        <br>
                        <span class="badge bg-light" style="cursor:pointer" onclick="inpSpend('.$param.')">
                        <i class="fa fa-credit-card icon-gradient bg-strong-bliss"></i> Rp.'.number_format($spend).' ('.$spend_percent.'%)</span>';
                })
                ->addColumn('status', function($row){
                    if($row->approved_at!==NULL) {                                      // disetujui
                        if($row->end_date > date('Y-m-d') && $row->is_publish=='1') {   // masih publish belum berakhir
                            if($row->is_recommended==1) {
                                $status  = '<span class="badge bg-success">Tampil Dipilihan</span>';
                                $status .= '<br>Start: '.date('d-M-Y', strtotime($row->approved_at));
                                $status .= '<br>End: '.date('d-M-Y', strtotime($row->end_date));
                            } elseif($row->is_show_home==1) {
                                $status  = '<span class="badge bg-success">Tampil Diterbaru</span>';
                                $status .= '<br>Start: '.date('d-M-Y', strtotime($row->approved_at));
                                $status .= '<br>End: '.date('d-M-Y', strtotime($row->end_date));
                            } else {
                                $status  = '<span class="badge bg-success">Tampil Dipencarian</span>';
                                $status .= '<br>Start: '.date('d-M-Y', strtotime($row->approved_at));
                                $status .= '<br>End: '.date('d-M-Y', strtotime($row->end_date));
                            }
                        } elseif($row->is_publish=='0') {                               // tidak dipublikasi
                            $status  = '<span class="badge bg-danger">Tidak Tampil</span>';
                            $status .= '<br>Start: '.date('d-M-Y', strtotime($row->approved_at));
                            $status .= '<br>End: '.date('d-M-Y', strtotime($row->end_date));
                        } else {                                                        // sudah berakhir
                            $status  = '<span class="badge bg-danger">Sudah Berakhir</span>';
                            $status .= '<br>Start: '.date('d-M-Y', strtotime($row->approved_at));
                            $status .= '<br>End: '.date('d-M-Y', strtotime($row->end_date));
                        }
                    } else {                                                            // belum disetujui
                        $status = '<span class="badge bg-secondary">Belum Disetujui</span>';
                    }

                    return $status;
                })
                ->addColumn('stats', function($row){
                    // $count_view         = TrackingVisitor::where('program_id', $row->id)->where('page_view', 'landing_page')->count();
                    // $count_amount_page  = TrackingVisitor::where('program_id', $row->id)->where('page_view', 'amount')->count();
                    // $count_payment_page = TrackingVisitor::where('program_id', $row->id)->where('page_view', 'payment_type')->count();

                    // $view         = "<i class='fa fa-eye icon-gradient bg-malibu-beach'></i> ".number_format($count_view);
                    // $amount_page  = "<i class='fa fa-money-bill icon-gradient bg-malibu-beach'></i> ".number_format($count_amount_page);
                    // $payment_page = "<i class='fa fa-credit-card icon-gradient bg-malibu-beach'></i> ".number_format($count_payment_page);

                    // if($count_view>0 && $count_amount_page>0) {
                    //     $amount_per  = round($count_amount_page/$count_view*100, 2);
                    // } else {
                    //     $amount_per  = 0;
                    // }

                    // if($count_view>0 && $count_payment_page>0) {
                    //     $count_payment_page_per  = round($count_payment_page/$count_view*100, 2);
                    // } else {
                    //     $count_payment_page_per  = 0;
                    // }

                    // return $view.'<br>'.$amount_page.' ('.$amount_per.'%) <br>'.$payment_page.' ('.$count_payment_page_per.'%)';

                    return'-';



                    // $view        = "<i class='fa fa-eye icon-gradient bg-malibu-beach'></i> ".number_format($row->count_view);
                    // $read_more   = "<i class='fa fa-angle-double-down icon-gradient bg-malibu-beach'></i> ".number_format($row->count_read_more);
                    // $amount_page = "<i class='fa fa-download icon-gradient bg-malibu-beach'></i> ".number_format($row->count_amount_page);

                    // if($row->count_view>0 && $row->count_amount_page>0) {
                    //     $amount_per  = round($row->count_amount_page/$row->count_view*100, 2);
                    // } else {
                    //     $amount_per  = 0;
                    // }

                    // if($row->count_view>0 && $row->count_read_more>0) {
                    //     $read_more_per  = round($row->count_read_more/$row->count_view*100, 2);
                    // } else {
                    //     $read_more_per  = 0;
                    // }

                    // return $view.'<br>'.$read_more.' ('.$read_more_per.'%) <br>'.$amount_page.' ('.$amount_per.'%)';

                })
                ->addColumn('donate', function($row){
                    // $count_view      = TrackingVisitor::where('program_id', $row->id)->where('page_view', 'landing_page')->count();
                    // $count_form_page = TrackingVisitor::where('program_id', $row->id)->where('page_view', 'form')->count();

                    // $interest = "<i class='fa fa-file icon-gradient bg-malibu-beach'></i> ".number_format($count_form_page);
                    // $checkout = \App\Models\Transaction::where('program_id', $row->id)->count('id');
                    // $count    = \App\Models\Transaction::where('program_id', $row->id)->where('status', 'success')->count('id');

                    // if($count_view>0 && $count_form_page>0) {
                    //     $interest_per  = round($count_form_page/$count_view*100, 2);
                    // } else {
                    //     $interest_per  = 0;
                    // }

                    // if($checkout>0 && $count_view>0) {
                    //     $checkout_per = round($checkout/$count_view*100, 2);
                    // } else {
                    //     $checkout_per = 0;
                    // }

                    // if($count>0 && $checkout>0) {
                    //     $count_per = round($count/$checkout*100, 2);
                    // } else {
                    //     $count_per = 0;
                    // }

                    // return $interest.' ('.$interest_per.'%)
                    //     <br> <i class="fa fa-shopping-cart icon-gradient bg-malibu-beach"></i> '.number_format($checkout).' ('.$checkout_per.'%)
                    //     <br> <i class="fa fa-heart icon-gradient bg-happy-green"></i> '.number_format($count).' ('.$count_per.'%)';

                    // return '-';


                    // $interest = "<i class='fa fa-file icon-gradient bg-malibu-beach'></i> ".number_format($row->count_pra_checkout);
                    // $checkout = \App\Models\Transaction::where('program_id', $row->id)->count('id');
                    // $count    = \App\Models\Transaction::where('program_id', $row->id)->where('status', 'success')->count('id');

                    // if($row->count_view>0 && $row->count_pra_checkout>0) {
                    //     $interest_per  = round($row->count_pra_checkout/$row->count_view*100, 2);
                    // } else {
                    //     $interest_per  = 0;
                    // }

                    // if($checkout>0 && $row->count_view>0) {
                    //     $checkout_per = round($checkout/$row->count_view*100, 2);
                    // } else {
                    //     $checkout_per = 0;
                    // }

                    // if($count>0 && $checkout>0) {
                    //     $count_per = round($count/$checkout*100, 2);
                    // } else {
                    //     $count_per = 0;
                    // }

                    // return $interest.' ('.$interest_per.'%)
                    //     <br> <i class="fa fa-shopping-cart icon-gradient bg-malibu-beach"></i> '.number_format($checkout).' ('.$checkout_per.'%)
                    //     <br> <i class="fa fa-heart icon-gradient bg-happy-green"></i> '.number_format($count).' ('.$count_per.'%)';

                    return number_format($row->donate_sum);
                })
                ->addColumn('action', function($row){
                    $url_edit  = route('member.program.edit', $row->id);
                    // $url_edit  = route('member.report.settlement');
                    $actionBtn = '<a href="'.$url_edit.'" class="edit btn btn-warning btn-xs mb-1" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="'.route('member.program.show', $row->id).'" class="edit btn btn-info btn-xs mb-1" title="Statistik"><i class="fa fa-chart-line"></i></a>
                                <a href="'.route('member.program.show', $row->id).'" class="edit btn btn-info btn-xs mb-1" title="Donasi"><i class="fa fa-donate"></i></a>
                                <a href="'.route('member.program.show', $row->id).'" class="edit btn btn-info btn-xs mb-1" title="Donatur"><i class="fa fa-users"></i></a>
                                <a href="'.route('member.program.show', $row->id).'" class="edit btn btn-info btn-xs mb-1" title="Fundraiser"><i class="fa fa-people-carry"></i></a>
                                <a href="'.route('member.program.show', $row->id).'" class="edit btn btn-info btn-xs mb-1" title="Penyaluran"><i class="fa fa-hand-holding-heart"></i></a>
                                <a href="'.route('member.program.show', $row->id).'" class="edit btn btn-info btn-xs mb-1" title="Operasional"><i class="fa fa-file-invoice-dollar"></i></a>
                                <a href="'.route('member.program.index', $row->slug).'" class="edit btn btn-info btn-xs mb-1" title="Link" target="_blank"><i class="fa fa-external-link-alt"></i></a>
                                ';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'nominal', 'status', 'stats', 'donate'])
                ->make(true);
        // }
    }
}
