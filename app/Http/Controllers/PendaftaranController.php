<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index () {
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    public function create () {
        return view ('pendaftaran.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required'
        ]);

        $pendaftaran = new Pendaftaran;
        $pendaftaran->nama = $request->nama;
        $pendaftaran->nik = $request->nik;
        $pendaftaran->nama_ayah = $request->nama_ayah;
        $pendaftaran->nama_ibu = $request->nama_ibu;
        $pendaftaran->jk = $request->jk;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->agama = $request->agama;
        $pendaftaran->save();

        return redirect('/pendaftaran')->with('message', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    public function delete ($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        
        return redirect('/pendaftaran')->with('message', 'Data Berhasil Dihapus');
    }

}
