<div class="card">
    <h3>Lokasi: {{ $item['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $item['nama_pelapor'] }}</p>
    <p><strong>Tinggi Genangan Air:</strong> {{ $item['tinggi_air'] }} cm</p>
    <p><strong>Status Genangan:</strong> 
        @if($item['tinggi_air'] > 70)
            <span class="badge badge-awas">Awas</span>
        @elseif($item['tinggi_air'] >= 30)
            <span class="badge badge-siaga">Siaga</span>
        @else
            <span class="badge badge-waspada">Waspada</span>
        @endif
    </p>
    <small style="color: #6c757d;">Dilaporkan: {{ $item['waktu'] }}</small>
</div>