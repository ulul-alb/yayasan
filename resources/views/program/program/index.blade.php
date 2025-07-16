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
            <h3>List Program</h3>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Export</a>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah</button>
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
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Tanggal Berakhir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($program as $data)
                                <tr>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->short_desc }}</td>
                                    <td>{{ $data->kategoriProgram->nama ?? '-' }}</td>
                                    <td>{{ $data->end_date }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info btn-detail"
                                            data-title="{{ $data->title }}"
                                            data-short_desc="{{ $data->short_desc }}"
                                            data-end_date="{{ $data->end_date }}"
                                            data-kategori="{{ $data->kategoriProgram->nama }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalLihat">
                                            <i class="align-middle" data-feather="eye"></i>
                                        </a>
                                        <a href="{{ route('program.edit', $data->id) }}" class="btn btn-sm btn-warning">
                                            <i class="align-middle" data-feather="edit-2"></i>
                                        </a>
                                        <form action="{{ route('program.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
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

<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Program</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('member.program.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Program</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="short_desc" class="form-label">Deskripsi Singkat</label>
                        <input type="text" name="short_desc" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="about" class="form-label">Tentang Program</label>
                        <textarea name="about" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">Tanggal Berakhir</label>
                        <input type="date" name="end_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori_program_id" class="form-label">Kategori Program</label>
                        <select name="kategori_program_id" class="form-control" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($kategori as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Data -->
<div class="modal fade" id="modalLihat" tabindex="-1" aria-labelledby="modalLihatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLihatLabel">Detail Program</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Judul:</strong> <span id="detailNamaProgram"></span></p>
                <p><strong>Deskripsi Singkat:</strong> <span id="detailDeskripsi"></span></p>
                <p><strong>Kategori:</strong> <span id="detailKategori"></span></p>
                <p><strong>Tanggal Berakhir:</strong> <span id="detailTanggal"></span></p>
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
        $("#datatables-reponsive").DataTable({
            responsive: true
        });

        $('.btn-detail').on('click', function () {
            $("#detailNamaProgram").text($(this).data("title"));
            $("#detailDeskripsi").text($(this).data("short_desc"));
            $("#detailTanggal").text($(this).data("end_date"));
            $("#detailKategori").text($(this).data("kategori"));
        });
    });
</script>
@endsection
