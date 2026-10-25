@extends('layouts.app')

@section('title', 'Form Lapor Banjir')

@section('content')
    <h2>Formulir Pelaporan Banjir</h2>
    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Pelapor:</label>
            <input type="text" name="nama_pelapor" required>
        </div>
        <div class="form-group">
            <label>Lokasi Kejadian:</label>
            <input type="text" name="lokasi" required placeholder="Contoh: Dayeuhkolot">
        </div>
        <div class="form-group">
            <label>Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi_genangan" required>
        </div>
        <div class="form-group">
            <label>Tanggal Kejadian:</label>
            <input type="date" name="tanggal_kejadian" required>
        </div>
        <div class="form-group">
            <label>Keterangan:</label>
            <textarea name="keterangan" rows="3"></textarea>
        </div>
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection