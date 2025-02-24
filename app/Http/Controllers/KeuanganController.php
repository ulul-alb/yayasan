<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function transaksi()
    {
        return view('keuangan.transaksi');
    }
}
