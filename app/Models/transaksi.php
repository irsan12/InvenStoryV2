<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
      'idTransaksi', 'tagihan','tanggal',
  ];

   public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barang()
    {
    	return $this->belongsToMany(barang::class);
    }
}
