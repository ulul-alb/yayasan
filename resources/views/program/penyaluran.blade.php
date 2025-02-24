@extends('layouts.admin', [
    'second_title'    => 'Program',
    'header_title'    => 'Dashboard Admin',
    'sidebar_menu'    => 'dashboard',
    'sidebar_submenu' => 'Dashboard Admin'
])


@section('css_plugins')
    <style type="text/css">
        
    </style>
@endsection


@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>List Penyaluran</h3>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Export</a>
            <a href="#" class="btn btn-primary">Tambah</a>
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
                    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama program</th>
                                <th>Penerima</th>
                                <th>Jumlah dana</th>
                                <th>Tanggal Penyaluran</th>
                                <th>Start date</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2023/04/25</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2023/07/25</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2019/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2022/03/29</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2018/11/28</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2022/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2022/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2020/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2019/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2018/12/13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2018/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2023/03/03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2018/10/16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2022/12/18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2020/03/17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2022/11/27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2023/03/21</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2019/02/27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2020/07/14</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2018/11/13</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2023/06/27</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2023/01/25</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
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
    <script src="{{ asset('/js/datatables.js') }}"></script>
@endsection


@section('js_inline')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });
</script>
@endsection
