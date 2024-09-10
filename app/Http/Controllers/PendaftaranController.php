<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $employes = Pendaftaran::latest()->paginate(5);
        return view('pendaftaran.index', compact('employes'));
    }

    public function search(Request $request){
        $employes = Pendaftaran::where('nama', 'like', '%' . $request->search . '%')->paginate(3);
        return view('pendaftaran.index', compact('employes'));
    }

    public function create()
    {
        return view('pendaftaran.create');
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'status_kerja' => 'required|string',
        ]);

        Pendaftaran::create($attributes);

        return redirect(route('pendaftaran.index'))->with('success', 'Berhasil membuat data');
    }

    public function edit($id)
    {
        $employe = Pendaftaran::find($id);
        return view('pendaftaran.edit', compact('employe'));

    }
    public function update(Request $request, $id){
        $attributes = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'status_kerja' => 'required',
        ]);
        $employe = Pendaftaran::find($id);
        $employe->update($attributes);
        return redirect("/pendaftaran");

    }

    public function delete($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();

        return redirect('/pendaftaran')->with('message', 'Data Berhasil Dihapus');
    }
}
