@extends('layouts.app')

@section('title', 'Manage Game')

@section('content')
    <div class="container">
        <div class="col-md-8 bg-light manage-wrapper">
            <h3><i class="uil uil-create-dashboard me-1"></i>Manage Game</h3>
            <p>Manage the games and don't forget to recheck it</p>
            <hr>
            <a href="{{ url('games/create') }}" class="btn btn-dark btn-sm mb-3"><i class="uil uil-plus me-1"></i>Create
                Games</a>

            @if (session('success_status'))
                <div class="alert alert-success" role="alert">
                    <i class="uil uil-grin-tongue-wink-alt me-1"></i>{{ session('success_status') }}
                </div>
            @endif

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Publisher</th>
                        <th>Deskripsi</th>
                        <th>Tahun Rilis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $game->judul }}</td>
                            <td>{{ $game->publisher }}</td>
                            <td>{{ $game->deskripsi }}</td>
                            <td>{{ $game->tahun_rilis }}</td>
                            <td>
                                <a href="{{ url('games/' . $game->id) }}" class="text-primary">
                                    <i class="uil uil-edit"></i>
                                </a>

                                <a href="#" class="text-danger"
                                    onclick="event.preventDefault();document.getElementById('delete-form-{{ $game->id }}').submit();">
                                    <i class=" uil uil-trash-alt"></i>
                                    <form id="delete-form-{{ $game->id }}" action="{{ url('games/' . $game->id) }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
