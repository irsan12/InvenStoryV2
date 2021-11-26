<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

      protected $fillable = [
      'kodebarang', 'Nama_barang','Harga_M','Harga_J','Harga_B','stok',
  ];


    public function transaksi()
    {
    	return $this->belongsToMany(transaksi::class);
    }
}
