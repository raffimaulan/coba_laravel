<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // Menampilkan form absensi
    public function create()
    {
        return view('attendance.create');
    }

    // Menyimpan data absensi ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'user_name' => 'required|string|max:255',
        ]);

        // Simpan data absensi
        Attendance::create([
            'user_name' => $request->user_name,
            'tanggal' => Carbon::now()->toDateString(),
            'waktu_absen' => Carbon::now()->toTimeString(),
        ]);

        // Redirect balik dengan pesan sukses
        return redirect()->back()->with('success', 'Absensi berhasil disimpan!');
    }
}
