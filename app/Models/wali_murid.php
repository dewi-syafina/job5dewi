<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliMurid extends Model
{
    use HasFactory;

    // Jika nama tabel beda, uncomment baris ini dan sesuaikan:
    // protected $table = 'wali_murid';

    protected $fillable = [
        'nama_wali',
        'kontak',
    ];
}
