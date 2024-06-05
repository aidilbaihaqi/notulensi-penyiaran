<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use Illuminate\Support\Facades\Validator;

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
        return view('arsip.create', [
            'title' => 'Tambah Arsip'
        ]);
    }
    public function store(Request $request) {
        $request = Validator::make($request->all(), [
            'kode_siaran' => 'required',
            'file_rekaman' => 'required',
            'tgl_upload' => 'required'
        ]);

        if($request->fails()) {
            return 'alert("Gagal validasi")';
        }

        Arsip::create($request->all());

        return redirect()->route('arsip.index')
                        ->with('success', 'Arsip berhasil ditambahkan!');
    }
    public function edit($id) {
        $data = Arsip::findOrFail($id);
        return view('arsip.edit', [
            'title' => 'Ubah Arsip',
            'data' => $data
        ]);
    }
    public function update(Request $request, $id) {
        $request = Validator::make($request->all(), [
            'kode_siaran' => 'required',
            'file_rekaman' => 'required',
            'tgl_upload' => 'required'
        ]);

        if($request->fails()) {
            return 'alert("Gagal validasi")';
        }

        $data = Arsip::find($id);
        $data->update($request->all());

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
