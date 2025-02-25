<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function inventaris()
    {
        return view('aset.inventaris');
    }

    public function kategori()
    {
        return view('aset.kategori');
    }



}
