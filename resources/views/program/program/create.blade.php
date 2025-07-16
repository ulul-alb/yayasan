@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Program</h2>
    <form action="{{ route('program.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="title">Judul Program</label>
            <input type="text" name="title" class="form-control" required>
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="short_desc">Deskripsi</label>
            <input type="text" name="short_desc" class="form-control">
            @error('short_desc') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="about">Tentang Program</label>
            <textarea name="about" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="end_date">Tanggal Selesai</label>
            <input type="date" name="end_date" class="form-control">
        </div>

        <div class="mb-3">
            <label for="kategori_program_id">Kategori</label>
            <select name="kategori_program_id" class="form-control" required>
                @foreach($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
