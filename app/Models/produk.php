<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    // use HasFactory;
    protected $table = 'product_list';

    protected $fillable =[
        'namaProduk',
        'harga',
        'umurSimpan',
        'kategori',
    ];
}
