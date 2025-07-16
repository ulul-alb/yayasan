@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Info Program</h2>
    <form action="{{ route('penyaluran.update', $info->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Program</label>
            <input type="text" name="nama_program" class="form-control" value="{{ $info->nama_program }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $info->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Detail</label>
            <input type="text" name="detail" class="form-control" value="{{ $info->detail }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="text" name="gambar" class="form-control" value="{{ $info->gambar }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
