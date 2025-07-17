@extends('layouts.admin', [
    'second_title'    => 'Program',
    'header_title'    => 'Dashboard Admin',
    'sidebar_menu'    => 'dashboard',
    'sidebar_submenu' => 'Dashboard Admin'
])

@section('css_inline')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
@endsection

@section('css_plugins')
    <style type="text/css">
        .btn-xs {
            padding: 1px 3px !important;
            font-size: 13px !important;
        }
    </style>
@endsection

@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>List Program</h3>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Export</a>
            <a href="{{ route('member.program.create') }}" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Filter : 
                    <hr>
                </div>
                <div class="card-body">
                    <table id="datatables-program" class="table table-hover table-bordered table-striped table-sm" style="width:100%">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Nominal</th>
                                <th>Status</th>
                                <th>Donasi</th>
                                <th>Statistik</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_modal')

@endsection

@section('js_plugins')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@endsection

@section('js_inline')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $("#datatables-program").DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            autoWidth: true,
            order: [],
            ajax: "{{ route('member.program.datatables') }}/?active=1",
            columns: [
                { data: 'title', name: 'title' },
                { data: 'nominal', name: 'nominal' },
                { data: 'status', name: 'status' },
                { data: 'donate', name: 'donate' },
                { data: 'stats', name: 'stats' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });

        $('.btn-detail').on('click', function () {
            $("#detailNamaProgram").text($(this).data("title"));
            $("#detailDeskripsi").text($(this).data("short_desc"));
            $("#detailTanggal").text($(this).data("end_date"));
            $("#detailKategori").text($(this).data("kategori"));
        });
    });
</script>
@endsection
