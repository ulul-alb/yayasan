<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    /**
     * Dashbaord list
     *
     */
    public function index()
    {
        $programs = Program::all(); // Ambil semua data dari tabel programs
        return view('program.index', compact('programs')); // Kirim data ke view
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

    public function show($id)
    {
        $program = Program::findOrFail($id);
        return view('program.show', compact('program'));
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('program.edit', compact('program'));
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->route('program.index')->with('success', 'Program berhasil dihapus.');
    }



}
