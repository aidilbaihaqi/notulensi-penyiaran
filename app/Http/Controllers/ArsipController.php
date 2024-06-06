<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use App\Models\Siaran;

class ArsipController extends Controller
{
    public function index() {
        $data = Arsip::all();
        return view('arsip.index', [
            'title' => 'Data Arsip',
            'data' => $data
        ]);
    }
    public function create() {
        $data = Siaran::all();
        return view('arsip.create', [
            'title' => 'Tambah Arsip',
            'data' => $data
        ]);
    }
    public function store(Request $request) {
        $request->validate([
            'kode_siaran' => 'required',
            'durasi_rekaman' => 'required',
            'lokasi_siaran' => 'required',
            'tamu' => 'required'
        ]);

        Arsip::create([
            'kode_siaran' => $request->kode_siaran,
            'durasi_rekaman' => $request->durasi_rekaman,
            'lokasi_siaran' => $request->lokasi_siaran,
            'tamu' => $request->tamu,
            'tgl_upload' => now()
        ]);

        return redirect()->route('arsip.index')
                        ->with('success', 'Arsip berhasil ditambahkan!');
    }
    public function edit($id) {
        $data = Arsip::findOrFail($id);
        $siaran = Siaran::all();
        return view('arsip.edit', [
            'title' => 'Ubah Arsip',
            'data' => $data,
            'siaran' => $siaran
        ]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'kode_siaran' => 'required',
            'durasi_rekaman' => 'required',
            'lokasi_siaran' => 'required',
            'tamu' => 'required'
        ]);

        $data = Arsip::find($id);
        $data->update([
            'kode_siaran' => $request->kode_siaran,
            'durasi_rekaman' => $request->durasi_rekaman,
            'lokasi_siaran' => $request->lokasi_siaran,
            'tamu' => $request->tamu,
            'tgl_upload' => now()
        ]);

        return redirect()->route('arsip.index')
                        ->with('success', 'Arsip berhasil diubah!');
    }
    public function destroy($id) {
        $data = Arsip::find($id);
        $data->delete();
    
        return redirect()->route('arsip.index')
                        ->with('success', 'Arsip berhasil dihapus!');
    }

}
