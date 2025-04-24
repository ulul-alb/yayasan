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
            <h3>Kabar Terbaru</h3>
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
                                <th>Nama program</th>
                                <th>Tanggal</th>
                                <th>Detail Proses</th>
                                <th>Gambar</th>
                                
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($info as $data)
                                <tr>
                                    <td>{{ $data->nama_program }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->detail_proses }}</td>
                                    <td>
                                        @if($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" width="100" />
                                        @else
                                            Tidak ada gambar
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info btnLihat"
                                        data-nama="{{ $data->nama_program }}"
                                        data-tanggal="{{ $data->tanggal }}"
                                        data-detail="{{ $data->detail_proses }}"
                                        data-gambar="{{ $data->gambar }}"
                                        data-bs-toggle="modal" data-bs-target="#modalLihat">
                                            <i class="align-middle" data-feather="eye"></i>
                                        </a>
                                        <a href="{{ route('info.edit', $data->id) }}" class="btn btn-sm btn-warning">
                                            <i class="align-middle" data-feather="edit-2"></i>
                                        </a>
                                        <form action="{{ route('info.destroy', $data->id) }}" method="POST" style="display:inline;">
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

<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Data Kabar Terbaru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('info.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_program" class="form-label">Nama Program</label>
                        <input type="text" name="nama_program" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="detail_proses" class="form-label">Detail Proses</label>
                        <input type="text" name="detail_proses" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" required>
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
                <h5 class="modal-title" id="modalLihatLabel">Detail Kabar Terbaru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nama Program:</strong> <span id="detailNama"></span></p>
                <p><strong>Tanggal:</strong> <span id="detailTanggal"></span></p>
                <p><strong>Detail Proses:</strong> <span id="detailDetailProses"></span></p>
                <p><strong>Tanggal Penyaluran:</strong> <span id="detailTanggalPenyaluran"></span></p>

            </div>
        </div>
    </div>
</div>
@endsection