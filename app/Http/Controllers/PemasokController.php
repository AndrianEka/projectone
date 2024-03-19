<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    public function index()
    {
        $pemasok = Pemasok::all();
        return view('pemasok.index', compact(['pemasok']));
    }

    public function create()
    {
        return view('pemasok.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemasok' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);
        Pemasok::create([
            'nama_pemasok' => $request->nama_pemasok,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'keterangan' => $request->keterangan
        ]);
        return Redirect('/pemasok')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $pemasok = Pemasok::find($id);
        return view('pemasok.edit', compact(['pemasok']));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pemasok' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);
        $pemasok = Pemasok::find($id);
        $pemasok->update([
            'nama_pemasok' => $request->nama_pemasok,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'keterangan' => $request->keterangan
        ]);
        return Redirect('/pemasok')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $pemasok = Pemasok::find($id);
        $pemasok->delete();
        return Redirect('/pemasok')->with('success', 'Data Berhasil Dihapus');
    }
}
