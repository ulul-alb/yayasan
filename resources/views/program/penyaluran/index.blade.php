@extends('layouts.admin', [
    'second_title'    => 'Program',
    'header_title'    => 'Dashboard Admin',
    'sidebar_menu'    => 'dashboard',
    'sidebar_submenu' => 'Dashboard Admin'
])


@section('css_plugins')
    <style type="text/css">
        
    </style>
@endsection


@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>List Penyaluran</h3>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Export</a>
            <a href="#" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Filter : 
                    <hr>
                </div>
                <div class="card-body">
                    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama program</th>
                                <th>Penerima</th>
                                <th>Jumlah dana</th>
                                <th>Tanggal Penyaluran</th>
                                <th>Start date</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penyaluran as $data)
                                <tr>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->penerima }}</td>
                                    <td>{{ $data->jumlah_dana }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->start_date }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info btnLihat"
                                        data-nama="{{ $data->nama }}"
                                        data-penerima="{{ $data->penerima }}"
                                        data-dana="{{ $data->jumlah_dana }}"
                                        data-tanggal="{{ $data->tanggal }}"
                                        data-start="{{ $data->start_date }}"
                                        data-bs-toggle="modal" data-bs-target="#modalLihat">
                                            <i class="align-middle" data-feather="eye"></i>
                                        </a>
                                        <a href="{{ route('penyaluran.edit', $data->id) }}" class="btn btn-sm btn-warning">
                                            <i class="align-middle" data-feather="edit-2"></i>
                                        </a>
                                        <form action="{{ route('penyaluran.destroy', $data->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                                <i class="align-middle" data-feather="trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content_modal')
<div class="modal fade" id="modalLihat" tabindex="-1" aria-labelledby="modalLihatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLihatLabel">Detail Penyaluran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nama Program:</strong> <span id="detailNama"></span></p>
                <p><strong>Penerima:</strong> <span id="detailPenerima"></span></p>
                <p><strong>Jumlah Dana:</strong> <span id="detailDana"></span></p>
                <p><strong>Tanggal Penyaluran:</strong> <span id="detailTanggal"></span></p>
                <p><strong>Start Date:</strong> <span id="detailStartDate"></span></p>
            </div>
        </div>
    </div>
</div>
@endsection



@section('js_plugins')
    <script src="{{ asset('/js/datatables.js') }}"></script>
@endsection


@section('js_inline')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Inisialisasi DataTable
        $("#datatables-reponsive").DataTable({
            responsive: true
        });

        // Event saat tombol "Lihat" diklik
        $(".btnLihat").on("click", function() {
            let nama = $(this).data("nama");
            let penerima = $(this).data("penerima");
            let dana = $(this).data("dana");
            let tanggal = $(this).data("tanggal");
            let start = $(this).data("start");

            $("#detailNama").text(nama);
            $("#detailPenerima").text(penerima);
            $("#detailDana").text(dana);
            $("#detailTanggal").text(tanggal);
            $("#detailStartDate").text(start);
        });
    });
</script>
@endsection

