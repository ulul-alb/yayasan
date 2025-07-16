<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyaluran;

class ProgPenyaluranController extends Controller
{
    // Menampilkan semua data penyaluran
    public function index()
    {
        $program_spend = Penyaluran::all();
        return view('program.penyaluran.index', compact('program_spend'));
    }

    // Menampilkan detail data penyaluran
    public function show($id)
    {
        $program_spend = Penyaluran::findOrFail($id);
        return view('program.penyaluran.show', compact('program_spend'));
    }

    // Menampilkan form tambah data penyaluran
    public function create()
    {
        return view('program.penyaluran.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
            'jumlah_dana' => 'required|numeric',
            'tanggal_penyaluran' => 'required|date'
        ]);
        Penyaluran::create($request->only([
            'nama_program',
            'penerima',
            'jumlah_dana',
            'tanggal_penyaluran'
        ]));
        return redirect()->route('penyaluran.index')->with('success', 'Data berhasil ditambahkan');
    }


    // Menampilkan form edit
    public function edit($id)
    {
        $penyaluran = Penyaluran::findOrFail($id);
        return view('program.penyaluran.edit', compact('penyaluran'));
    }

    // Mengupdate data yang sudah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
            'jumlah_dana' => 'required|numeric',
            'tanggal_penyaluran' => 'required|date'
        ]);

        $penyaluran = Penyaluran::findOrFail($id);
        $penyaluran->update($request->all());

        return redirect()->route('penyaluran.index')->with('success', 'Data berhasil diperbarui');
    }

    // Menghapus data penyaluran
    public function destroy($id)
    {
        $penyaluran = Penyaluran::findOrFail($id);
        $penyaluran->delete();

        return redirect()->route('penyaluran.index')->with('success', 'Data berhasil dihapus');
    }
}
