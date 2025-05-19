<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis'; // pastikan nama tabel sesuai
    protected $fillable = ['user_id', 'tanggal', 'jam_masuk', 'jam_keluar'];
}
