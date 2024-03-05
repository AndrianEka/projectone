<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Termwind\Components\Dd;

class PelangganController extends Controller
{
  public function index()
  {
    $pelanggan = Pelanggan::all();
    return view('pelanggan.index', compact(['pelanggan']));
  }

  public function create()
  {
    return view('pelanggan.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'alamat' => 'required',
      'no_hp' => 'required'
    ]);
    Pelanggan::create([
      'nama' => $request->nama,
      'alamat' => $request->alamat,
      'no_hp' => $request->no_hp,
      'keterangan' => $request->keterangan
    ]);
    return Redirect('/pelanggan')->with('success', 'Data Berhasil Ditambahkan');
  }

  public function edit($id)
  {
    $pelanggan = Pelanggan::find($id);
    return view('pelanggan.edit', compact(['pelanggan']));
  }
  public function update(Request $request, $id)
  {
    $request->validate([
      'nama' => 'required',
      'alamat' => 'required',
      'no_hp' => 'required'
    ]);
    $pelanggan = Pelanggan::find($id);
    $pelanggan->update([
      'nama' => $request->nama,
      'alamat' => $request->alamat,
      'no_hp' => $request->no_hp,
      'keterangan' => $request->keterangan
    ]);
    return Redirect('/pelanggan')->with('success', 'Data Berhasil Diubah');
  }
}
