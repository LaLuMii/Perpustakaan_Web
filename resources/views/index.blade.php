@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<div class="container py-5">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang di Perpustakaan Sekolah</h1>
            <p class="col-md-8 fs-5 mt-3">
                Temukan koleksi buku terbaik untuk mendukung pembelajaranmu.
            </p>
            <a href="{{ route('vbuku.index') }}" class="btn btn-primary btn-lg">
                Lihat Buku
            </a>
        </div>
    </div>
</div>
@endsection
