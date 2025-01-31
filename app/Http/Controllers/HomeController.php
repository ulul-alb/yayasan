<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Dashbaord home
     *
     */
    public function index()
    {
        return view('dashboard');
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
