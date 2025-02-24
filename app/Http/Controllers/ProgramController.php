<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Dashbaord list
     *
     */
    public function index()
    {
        return view('program.index');
    }

    public function penyaluran()
    {
        return view('program.penyaluran');
    }

    public function info()
    {
        return view('program.info');
    }

    /**
     * Profile
     *
     */
    public function profile()
    {
        return view('profile.index');
    }

}
