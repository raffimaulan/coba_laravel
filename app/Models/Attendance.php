<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendances';  // Nama tabel

    protected $fillable = [
        'user_name',
        'tanggal',
        'waktu_absen',
    ];

    public $timestamps = true;  // biar created_at dan updated_at otomatis
}
