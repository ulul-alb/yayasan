@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Penyaluran</h2>
    <form action="{{ route('penyaluran.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_program" class="form-label">Nama Program</label>
            <input type="text" name="nama_program" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="penerima" class="form-label">Penerima</label>
            <input type="text" name="penerima" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jumlah_dana" class="form-label">Jumlah Dana</label>
            <input type="number" name="jumlah_dana" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_penyaluran" class="form-label">Tanggal Penyaluran</label>
            <input type="date" name="tanggal_penyaluran" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
