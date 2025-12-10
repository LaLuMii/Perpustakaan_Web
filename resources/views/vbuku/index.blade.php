@extends('layouts.main')

@section('title', 'Daftar Buku')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Daftar Buku</h1>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ $book['image'] }}" class="card-img-top" alt="Cover" style="height:150px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book['title'] }}</h5>
                        <p class="card-text mb-1"><strong>Penulis:</strong> {{ $book['author'] }}</p>
                        <p class="card-text mb-1"><strong>Tahun:</strong> {{ $book['year'] }}</p>
                        <p class="card-text mb-1"><strong>Jenis:</strong> {{ $book['type'] }}</p>
                        <p class="card-text"><strong>Genre:</strong> {{ $book['genre'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
