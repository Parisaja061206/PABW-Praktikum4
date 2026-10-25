<div class="card">
    <h3>Pelapor: {{ $laporan->nama_pelapor }}</h3>
    <p><strong>Lokasi:</strong> {{ $laporan->lokasi }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan->tinggi_genangan }} cm</p>
    <p><strong>Tanggal:</strong> {{ $laporan->tanggal_kejadian }}</p>
    
    @if($laporan->tinggi_genangan < 30)
        <p><strong>Status:</strong> <span style="color: orange; font-weight: bold;">Waspada</span></p>
    @elseif($laporan->tinggi_genangan >= 30 && $laporan->tinggi_genangan <= 70)
        <p><strong>Status:</strong> <span style="color: darkorange; font-weight: bold;">Siaga</span></p>
    @else
        <p><strong>Status:</strong> <span style="color: red; font-weight: bold;">Awas</span></p>
    @endif

    <p><strong>Keterangan:</strong> {{ $laporan->keterangan }}</p>
</div>