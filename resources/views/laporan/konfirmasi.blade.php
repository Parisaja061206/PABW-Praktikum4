<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Pengiriman Laporan</title>
</head>
<body>
    <h2>Konfirmasi Pengiriman Laporan</h2>
    <p>Success: Laporan banjir Anda berhasil dikirim ke sistem!</p>

    @if(isset($laporan))
    <div>
        <p><strong>Nama Pelapor:</strong> {{ $laporan->nama_pelapor }}</p>
        <p><strong>Lokasi:</strong> {{ $laporan->lokasi }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $laporan->tinggi_genangan }} cm</p>
        <p><strong>Tanggal Kejadian:</strong> {{ $laporan->tanggal_kejadian }}</p>
    </div>
    @endif

    <br>
    <a href="/lapor">Kembali ke Daftar Laporan</a>
</body>
</html>