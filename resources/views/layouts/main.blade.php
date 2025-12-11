<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Perpustakaan Sekolah')</title>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('landing') }}">Perpustakaan Sekolah</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('vbuku.index') }}">Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="pt-5">
        @yield('content')
    </div>

    <footer class="bg-dark text-light pt-5 pb-4">
        <div class="container">
            <div class="row">

                {{-- Kolom 1: Tentang --}}
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Perpustakaan Sekolah</h5>
                    <p class="small mt-3">
                        Menyediakan koleksi buku terbaik untuk mendukung kegiatan belajar mengajar siswa.
                        Kami berkomitmen menjadi pusat literasi unggulan di lingkungan sekolah.
                    </p>
                </div>

                {{-- Kolom 2: Kontak --}}
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Kontak</h5>
                    <ul class="list-unstyled mt-3 small">
                        <li class="mb-2"><strong>Telepon:</strong> (021) 1234 5678</li>
                        <li class="mb-2"><strong>Email:</strong> perpustakaan@sekolah.ac.id</li>
                        <li class="mb-2"><strong>Instagram:</strong> @perpustakaansklh</li>
                    </ul>
                </div>

                {{-- Kolom 3: Lokasi + Maps --}}
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Lokasi Kami</h5>
                    <p class="small mt-3">
                        Jl. Pendidikan No. 45, Jakarta Selatan
                        Indonesia, 12540
                    </p>
                    {{-- Embed Google Maps Responsif --}}
                    <div class="ratio ratio-16x9 mt-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d987.3104378081707!2d113.7067273465114!3d-8.178383762787295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1765416600810!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>

            <hr class="border-secondary">

            <div class="text-center small">
                &copy; {{ date('Y') }} Perpustakaan Sekolah — Semua Hak Dilindungi.
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
