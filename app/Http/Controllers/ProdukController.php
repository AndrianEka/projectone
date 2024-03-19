<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact(['produk']));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'jumlah_barang' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'total_harga' => 'required',
            'keuntungan' => 'required'
        ]);
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_pokok' => $request->harga_pokok,
            'harga_jual' => $request->harga_jual,
            'total_harga' => $request->total_harga,
            'keuntungan' => $request->keuntungan
        ]);
        return Redirect('/produk')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produk.edit', compact(['produk']));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'jumlah_barang' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'total_harga' => 'required',
            'keuntungan' => 'required'
        ]);
        $produk = Produk::find($id);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_pokok' => $request->harga_pokok,
            'harga_jual' => $request->harga_jual,
            'total_harga' => $request->total_harga,
            'keuntungan' => $request->keuntungan
        ]);
        return Redirect('/produk')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return Redirect('/produk')->with('success', 'Data Berhasil Dihapus');
    }
     
}
