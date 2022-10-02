<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'kode_barang',
        'nama_barang',
        'harga_barang',

    ];
}
