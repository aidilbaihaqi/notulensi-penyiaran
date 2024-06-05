<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notulensi;
use Illuminate\Support\Facades\Validator;

class NotulensiController extends Controller
{
    public function index() {
        $data = Notulensi::all();
        return view('notulensi.index', [
            'title' => 'Data Notulensi',
            'data' => $data
        ]);
    }
    public function create() {
        return view('notulensi.create', [
            'title' => 'Tambah Notulensi'
        ]);
    }
    public function store(Request $request) {
        $request = Validator::make($request->all(), [
            'kode_siaran' => 'required',
            'notulen' => 'required'
        ]);

        if($request->fails()) {
            return 'alert("Gagal validasi")';
        }

        Notulensi::create($request->all());

        return redirect()->route('notulensi.index')
                        ->with('success', 'Notulensi berhasil ditambahkan!');
    }
    public function edit($id) {
        $data = Notulensi::findOrFail($id);
        return view('notulensi.edit', [
            'title' => 'Ubah Notulensi',
            'data' => $data
        ]);
    }
    public function update(Request $request, $id) {
        $request = Validator::make($request->all(), [
            'kode_siaran' => 'required',
            'notulen' => 'required'
        ]);

        if($request->fails()) {
            return 'alert("Gagal validasi")';
        }

        $data = Notulensi::find($id);
        $data->update($request->all());

        return redirect()->route('notulensi.index')
                        ->with('success', 'Notulensi berhasil diubah!');
    }
    public function destroy($id) {
        $data = Notulensi::find($id);
        $data->delete();
    
        return redirect()->route('notulensi.index')
                        ->with('success', 'Notulensi berhasil dihapus!');
    }

}