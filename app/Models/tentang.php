<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentang extends Model
{
    use HasFactory;
    protected $table = 'tentangkami';
    protected $fillable = ['Nama','Kelas','Jurusan','NoAbsen','Gambar'];
}
