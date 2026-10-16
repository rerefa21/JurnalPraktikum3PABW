@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
    <h2>Daftar Laporan Masuk</h2>

    @forelse($laporan as $item)
        @include('partials.laporan-card', ['item' => $item])
    @empty
        <div class="card">
            <p>Belum ada laporan banjir yang masuk.</p>
        </div>
    @endforelse
@endsection