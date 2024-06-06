<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notulensi;
use App\Models\Siaran;
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
        $data = Siaran::all();
        return view('notulensi.create', [
            'title' => 'Tambah Notulensi',
            'data' => $data
        ]);
    }
    public function store(Request $request) {
        $request->validate([
            'kode_siaran' => 'required',
            'notulen' => 'required'
        ]);

        Notulensi::create($request->all());

        return redirect()->route('notulensi.index')
                        ->with('success', 'Notulensi berhasil ditambahkan!');
    }
    public function edit($id) {
        $data = Notulensi::findOrFail($id);
        $siaran = Siaran::all();
        return view('notulensi.edit', [
            'title' => 'Ubah Notulensi',
            'data' => $data,
            'siaran' => $siaran
        ]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'kode_siaran' => 'required',
            'notulen' => 'required'
        ]);

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