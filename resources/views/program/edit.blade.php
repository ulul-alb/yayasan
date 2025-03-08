@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Program</h2>
        <form action="{{ route('program.update', $program->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Program</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $program->nama }}">
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="{{ $program->position }}">
            </div>

            <div class="mb-3">
                <label for="office" class="form-label">Office</label>
                <input type="text" class="form-control" id="office" name="office" value="{{ $program->office }}">
            </div>

            <div class="mb-3">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" value="{{ old('status', $program->status) }}" required>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $program->start_date }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
