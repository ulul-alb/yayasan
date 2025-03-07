@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
        <h3 class="mb-4 text-center">Detail Program</h3>
        <table class="table">
            <tr>
                <th>Nama Program</th>
                <td>{{ $program->nama }}</td>
            </tr>
            <tr>
                <th>Posisi</th>
                <td>{{ $program->position }}</td>
            </tr>
            <tr>
                <th>Kantor</th>
                <td>{{ $program->office }}</td>
            </tr>
            <tr>
                <th>Usia</th>
                <td>{{ $program->age }}</td>
            </tr>
            <tr>
                <th>Tanggal Mulai</th>
                <td>{{ $program->start_date }}</td>
            </tr>
        </table>
        <div class="text-center">
            <a href="{{ route('program.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
