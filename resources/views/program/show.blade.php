@extends('layouts.app') {{-- Sesuaikan dengan layout yang kamu gunakan --}}

@section('content')
<div class="container">
    <h2>Detail Program</h2>
    
    <table class="table">
        <tr>
            <th>Nama Program</th>
            <td>{{ $program->name }}</td>
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

    <a href="{{ route('program.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
