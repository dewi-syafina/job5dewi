<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

   protected $fillable = [
    'nis',
    'nama',
    'jk',
    'tempat_lahir',
    'tanggal_lahir',
    'id_kelas',
    'id_wali',
   ];

}

