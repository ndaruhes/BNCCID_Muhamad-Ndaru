@extends('layouts/app')
@section('title', 'Create Game')

@section('content')
    <div class="container">
        <div class="col-md-7 bg-light manage-wrapper">
            <h3><i class="uil uil-plus me-1"></i>Create Game</h3>
            <p>Manage the games and don't fo rget to recheck it</p>
            <hr>

            <form action="{{ url('games/create') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Judul Game</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                        placeholder="Masukkan Judul Game" name="judul" value="{{ old('judul') }}">
                    @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Publisher</label>
                    <input type="text" class="form-control" placeholder="Masukkan Publisher" name="publisher"
                        value="{{ old('publisher') }}">
                    @error('publisher') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi"
                        rows="5">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Rilis</label>
                    <input type="number" class="form-control" placeholder="Masukkan Tahun Rilis" name="tahun_rilis"
                        value="{{ old('tahun_rilis') }}">
                    @error('tahun_rilis') <small class=" text-danger">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
