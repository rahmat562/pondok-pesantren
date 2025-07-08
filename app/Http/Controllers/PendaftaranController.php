<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function create()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'ortu' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomer' => 'required|string|max:15',
            'email' => 'required|email|unique:pendaftaran,email',
        ]);

        // Simpan data ke database
        Pendaftaran::create([
            'nama_lengkap' => $request->name,
            'tempat_tanggal_lahir' => $request->tempat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_orang_tua_wali' => $request->ortu,
            'alamat' => $request->alamat,
            'nomer_telpon' => $request->nomer,
            'email' => $request->email,
        ]);

        // Redirect balik dengan popup success
        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
