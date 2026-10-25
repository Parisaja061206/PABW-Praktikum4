<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Laporan Banjir</title>
    <style>
        /* Masukkan seluruh kode CSS di atas ke sini */
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Laporan Banjir Terkini</h2>
        <p>Berikut adalah daftar laporan kejadian banjir yang dikirimkan oleh warga di wilayah Kabupaten Bandung.</p>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pelapor</th>
                        <th>Lokasi</th>
                        <th>Tinggi Genangan</th>
                        <th>Tanggal Kejadian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($laporan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><strong>{{ $item->nama_pelapor }}</strong></td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->tinggi_genangan }} cm</td>
                        <td>{{ $item->tanggal_kejadian }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Belum ada laporan banjir yang tersedia.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <a href="/lapor/tambah" class="btn">+ Buat Laporan Baru</a>
    </div>
</body>
</html>