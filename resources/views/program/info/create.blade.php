@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Kabar Terbaru</h2>
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
@endsection