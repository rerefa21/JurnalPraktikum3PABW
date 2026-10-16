@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <x-alert type="success" message="Laporan banjir Anda berhasil dikirim dan ditindaklanjuti oleh BPBD!" />

    <h2>Konfirmasi Data Laporan</h2>
    <div class="card">
        <p><strong>Nama Pelapor:</strong> {{ $data['nama_pelapor'] }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $data['tinggi_air'] }} cm</p>
        <p><strong>Status Evaluasi:</strong>
            @if($data['tinggi_air'] > 70)
                <span class="badge badge-awas">Awas</span>
            @elseif($data['tinggi_air'] >= 30)
                <span class="badge badge-siaga">Siaga</span>
            @else
                <span class="badge badge-waspada">Waspada</span>
            @endif
        </p>
    </div>

    <a href="{{ route('lapor.index') }}" class="btn">Lihat Semua Laporan</a>
@endsection