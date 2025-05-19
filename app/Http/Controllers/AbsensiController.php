<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function absenMasuk(Request $request)
    {
        Absensi::create([
            'user_id' => Auth::id(),
            'tanggal' => now()->toDateString(),
            'jam_masuk' => now()->toTimeString(),
        ]);

        return redirect()->back()->with('success', 'Absen masuk berhasil!');
    }

    public function absenKeluar(Request $request)
    {
        $absen = Absensi::where('user_id', Auth::id())
            ->where('tanggal', now()->toDateString())
            ->first();

        if ($absen) {
            $absen->jam_keluar = now()->toTimeString();
            $absen->save();
        }

        return redirect()->back()->with('success', 'Absen keluar berhasil!');
    }
}
