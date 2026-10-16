@extends('layouts.app')

@section('title', 'Form Pelaporan Banjir')

@section('content')
    <h2>Form Lapor Bencana Banjir</h2>
    <div class="card">
        <form action="{{ route('lapor.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor:</label>
                <input type="text" name="nama_pelapor" id="nama_pelapor" required>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi Kejadian:</label>
                <input type="text" name="lokasi" id="lokasi" required>
            </div>

            <div class="form-group">
                <label for="tinggi_air">Tinggi Genangan Air (cm):</label>
                <input type="number" name="tinggi_air" id="tinggi_air" required>
            </div>

            <button type="submit" class="btn">Kirim Laporan</button>
        </form>
    </div>
@endsection