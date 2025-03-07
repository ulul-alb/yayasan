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

    public function store(Request $request)
{  
    // Log data request untuk debugging
    \Log::info($request->all());

    // Validasi input terlebih dahulu
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'office' => 'required|string|max:255',
        'age' => 'required|integer',
        'start_date' => 'required|date',
    ]);

    // Simpan data ke database
    Program::create($validatedData);

    return redirect()->route('program.index')->with('success', 'Data berhasil ditambahkan!');
}






}
