<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Menampilkan daftar laporan dari database
    public function index()
    {
        $laporan = Laporan::all();
        return view('laporan.index', compact('laporan'));
    }

    // Menampilkan form pelaporan
    public function create()
    {
        return view('laporan.create');
    }

    // Menyimpan data form ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|integer',
            'tanggal_kejadian' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        Laporan::create($validated);

        // Mengambil data terakhir untuk konfirmasi
        $data = $validated;

        return view('laporan.konfirmasi', compact('data'));
    }
}