<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'total_harga', 'keuntungan'];
    protected $fillable = ['jumlah_barang', 'harga_pokok', 'harga_jual'];

}
