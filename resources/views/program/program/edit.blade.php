@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Program</h2>
        <form action="{{ route('member.rogram.update', $program->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Judul Program</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $program->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="short_desc" class="form-label">Deskripsi</label>
                <input type="text" name="short_desc" class="form-control" value="{{ old('short_desc', $program->short_desc) }}">
                @error('short_desc')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="about" class="form-label">Tentang Program</label>
                <textarea name="about" class="form-control" rows="4">{{ old('about', $program->about) }}</textarea>
                @error('about')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">Tanggal Berakhir</label>
                <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $program->end_date) }}">
                @error('end_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kategori_program_id" class="form-label">Kategori Program</label>
                <select name="kategori_program_id" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($kategori as $item)
                        <option value="{{ $item->id }}" {{ $program->kategori_program_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
                @error('kategori_program_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
