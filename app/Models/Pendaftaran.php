<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';

   protected $fillable = [
    'nama_lengkap', 'tempat_tanggal_lahir', 'jenis_kelamin',
    'nama_orang_tua_wali', 'alamat', 'nomer_telpon', 'email', 'status'
    ];

}
