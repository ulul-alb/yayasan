<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public function index()
    {
        $info = Info::all();
        return view('program.info.index', compact('info'));
    }

    public function create()
    {
        return view('program.info.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_program' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'detail_proses' => 'required|string|max:255',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Jika ada gambar, simpan ke storage
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('info', 'public');
        }

        // Simpan data ke database 
        Info::create([
            'nama_program' => $validated['nama_program'],
            'tanggal' => $validated['tanggal'],
            'detail_proses' => $validated['detail_proses'], // pastikan kolom di DB: detail_proses
            'gambar' => $validated['gambar'] ?? null,
        ]);

        return redirect()->route('info.index')->with('success', 'Data berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $info = Info::findOrFail($id);
        return view('program.info.edit', compact('info'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program' => 'required',
            'tanggal' => 'required|date',
            'detail' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $info = Info::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('info', 'public');
            $data['gambar'] = $gambar;
        }

        $info->update($data);

        return redirect()->route('info.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $info = Info::findOrFail($id);
        $info->delete();

        return redirect()->route('info.index')->with('success', 'Data berhasil dihapus!');
    }
}
