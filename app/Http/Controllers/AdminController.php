<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // Cek login session
        if (!$request->session()->has('admin')) {
            return redirect('/login');
        }

        // Ambil semua data pendaftaran
        $data = Pendaftaran::all();

        return view('admin', compact('data'));
    }
    public function approve(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        // Update status
        $pendaftaran->status = 'approved';
        $pendaftaran->save();

        // Kirim email notifikasi
        Mail::to($pendaftaran->email)->send(new \App\Mail\PendaftaranApproved($pendaftaran));

        return redirect()->back()->with('success', 'Pendaftaran berhasil diapprove dan email notifikasi dikirim.');
    }
    public function delete($id)
    {
        $pendaftaran = \App\Models\Pendaftaran::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}


