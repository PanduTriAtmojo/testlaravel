<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';
    protected $fillable = ['namaKamar','harga','deskripsi','gambar'];
}
