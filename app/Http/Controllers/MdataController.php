<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MdataController extends Controller
{
    public function staff()
    {
        return view('mdata.staff');
    }

    public function donatur()
    {
        return view('mdata.donatur');
    }

    public function mitra()
    {
        return view('mdata.mitra');
    }

    public function relawan()
    {
        return view('mdata.relawan');
    }

}
