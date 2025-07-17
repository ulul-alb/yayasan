@extends('layouts.admin', [
    'second_title'    => 'Program',
    'header_title'    => 'Dashboard Admin',
    'sidebar_menu'    => 'dashboard',
    'sidebar_submenu' => 'Dashboard Admin'
])

@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>Edit Program</h3>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Export</a>
            <a href="{{ route('member.program.create') }}" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('member.program.update', $program->id) }}" method="POST">
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
                        <hr class="mt-4 mb-3">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_modal')

@endsection

@section('js_plugins')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
@endsection

@section('js_inline')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        
    });
</script>
@endsection