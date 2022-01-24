@extends('layouts/app')

@section('title', 'Halaman Home')

@section('content')

    <!-- BANNER -->
    <div class="container banner">
        <h1>Selamat Datang di StarOne</h1>
        <p>Kumpulan informasi game menari hasil karya anak bangsa dan terupdate setiap harinya</p>

        <a href="#" class="btn btn-warning">Manage Game</a>
        <a href="#" class="btn btn-light">Contact Us</a>
    </div>

    <!-- GAMES CONTENT -->
    <div class="container mt-4">
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
