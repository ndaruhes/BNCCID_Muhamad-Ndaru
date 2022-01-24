@extends('layouts/app')

@section('title', 'Halaman Games')

@section('content')

    <!-- GAMES CONTENT -->
    <div class="container mt-4">
        <h3><i class="uil uil-volleyball me-1"></i>All Games</h3>
        <hr>
        <div class="row">
            @foreach ($games as $game)
                <div class="col-md-4">
                    <div class="col-md-12 bg-light game-content">
                        <h1 class="judul">{{ $game->judul }}</h1>
                        <span class="publisher badge bg-info">{{ $game->publisher }}</span>
                        <p class="deskripsi">{{ $game->deskripsi }}</p>
                        <span class="tahun-rilis">Tahun Rilis: {{ $game->tahun_rilis }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
