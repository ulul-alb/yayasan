@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Penyaluran</h2>
    <form action="{{ route('penyaluran.update', $penyaluran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Program</label>
            <input type="text" name="nama_program" class="form-control" value="{{ $penyaluran->nama_program }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penerima</label>
            <input type="text" name="penerima" class="form-control" value="{{ $penyaluran->penerima }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Dana</label>
            <input type="number" name="jumlah_dana" class="form-control" value="{{ $penyaluran->jumlah_dana }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Penyaluran</label>
            <input type="date" name="tanggal_penyaluran" class="form-control" value="{{ $penyaluran->tanggal_penyaluran }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
