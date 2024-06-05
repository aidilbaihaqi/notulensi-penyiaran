<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Siaran;

class SiaranController extends Controller
{
    public function index() {
        $data = Siaran::all();
        return view('siaran.index', [
            'title' => 'Data Siaran',
            'data' => $data
        ]);
    }
    public function create() {
        return view('siaran.create', [
            'title' => 'Tambah Siaran'
        ]);
    }
    public function store(Request $request) {
        $request = Validator::make($request->all(), [
            'kode_siaran' => 'required|unique:siarans',
            'judul' => 'required|max:150',
            'tgl_waktu' => 'required',
            'nama_penyiar' => 'required',
            'status' => 'required'
        ]);

        if($request->fails()) {
            return 'alert("Gagal validasi")';
        }

        Siaran::create($request->all());

        return redirect()->route('siaran.index')
                        ->with('success', 'Siaran berhasil dijadwalkan!');
    }
    public function edit($kode_siaran) {
        $data = Siaran::where('kode_siaran', $kode_siaran)->first();
        return view('siaran.edit', [
            'title' => 'Ubah Siaran',
            'data' => $data
        ]);
    }
    public function update(Request $request, $kode_siaran) {
        $request = Validator::make($request->all(), [
            'kode_siaran' => 'required',
            'judul' => 'required|max:150',
            'tgl_waktu' => 'required',
            'nama_penyiar' => 'required',
            'status' => 'required'
        ]);

        if($request->fails()) {
            return 'alert("Gagal validasi")';
        }

        $data = Siaran::find($kode_siaran);
        $data->update($request->all());

        return redirect()->route('siaran.index')
                        ->with('success', 'Siaran berhasil diubah!');
    }
    public function destroy($kode_siaran) {
        $data = Siaran::find($kode_siaran);
        $data->delete();
    
        return redirect()->route('siaran.index')
                        ->with('success', 'Siaran berhasil dihapus!');
    }

}
