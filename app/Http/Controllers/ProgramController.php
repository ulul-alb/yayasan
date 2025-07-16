<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\ProgramCategory;

class ProgramController extends Controller
{
    /**
     * Tampilkan daftar program di dashboard
     */
    public function index()
    {
        $program = Program::with('kategori')->get(); // ✅ eager load relasi kategori
        $kategori = ProgramCategory::all(); // ✅ semua kategori untuk dropdown atau lainnya
        return view('program.program.index', compact('program', 'kategori'));
    }

    /**
     * Simpan program baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_desc' => 'nullable|string|max:255',
            'about' => 'nullable|string',
            'end_date' => 'nullable|date',
            'kategori_program_id' => 'required|exists:program_category,id',
        ]);


        Program::create([
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'about' => $request->about,
            'end_date' => $request->end_date,
            'kategori_program_id' => $request->kategori_program_id
        ]);


        return redirect()->route('program.index')->with('success', 'Program berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit program
     */
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $kategori = ProgramCategory::all(); // ✅ ambil kategori untuk dropdown
        return view('program.program.edit', compact('program', 'kategori'));
    }

    /**
     * Update data program
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program'        => 'required|string|max:255',
            'deskripsi'           => 'required|string|max:255',
            'mulai_tanggal'       => 'required|date',
            'status'              => 'required|string',
            'kategori_program_id' => 'required|exists:program_category,id'
        ]);

        $program = Program::findOrFail($id);

        $program->update([
            'nama_program'        => $request->nama_program,
            'deskripsi'           => $request->deskripsi,
            'mulai_tanggal'       => $request->mulai_tanggal,
            'status'              => $request->status,
            'kategori_program_id' => $request->kategori_program_id
        ]);

        return redirect()->route('program.index')->with('success', 'Program berhasil diperbarui!');
    }

    /**
     * Hapus data program
     */
    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->route('program.index')->with('success', 'Program berhasil dihapus!');
    }
}
