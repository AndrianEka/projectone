<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Termwind\Components\Dd;

class PelangganController extends Controller
{
   public function index(){
    $pelanggan = Pelanggan::all();
    return view('pelanggan.index',compact(['pelanggan']));
   }

   public function create(){
    return view('pelanggan.create');
   }

    public function store(Request $request){
    Pelanggan::create([
      'nama'=>$request->nama,
      'alamat'=>$request->alamat,
      'no_hp'=>$request->no_hp,
      'keterangan'=>$request->keterangan
    ]);
    return Redirect('/pelanggan');
   }
}