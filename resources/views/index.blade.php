@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
{{-- Container1 --}}
<div class="container-fluid p-0" style="background: #e8e8e8; min-height: 50vh;">
    <div class="d-flex flex-column justify-content-center align-items-start h-50" style="padding: 80px 0 80px 40px;">
        <h1 class="fw-bold text-start mb-4" style="font-size: 3rem; color: #000000;">
            Selamat Datang di Perpustakaan Sekolah
        </h1>
        <p class="text-start mb-4" style="font-size: 1.25rem; color: #000000; max-width: 600px;">
            Temukan koleksi buku terbaik untuk mendukung pembelajaranmu
        </p>
        <a href="{{ route('vbuku.index') }}" class="btn d-inline-flex align-items-center gap-2" 
           style="background: #2563eb; color: white; padding: 12px 28px; border-radius: 25px; font-size: 1.1rem; font-weight: 500; text-decoration: none; border: none;">
            Lihat Buku 🔍
        </a>
    </div>
</div>

{{-- Container2 --}}
<div class="container-fluid p-0" style="background: #f0f0f0; min-height: 50vh;">
    <div class="row g-0 h-100">
        <!-- Left Content Section -->
        <div class="col-md-7 d-flex align-items-center" style="padding: 60px 80px;">
            <div>
                <h2 class="fw-bold mb-4" style="font-size: 2.5rem; color: #000000;">
                    Baca Buku Hingga Kamu Yang Membuatnya
                </h2>
                <p style="font-size: 1rem; color: #4a4a4a; line-height: 1.8; text-align: justify;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
        </div>
        
        <!-- Right Image Section -->
        <div class="col-md-5 d-flex align-items-center justify-content-center" style="padding: 60px 40px;">
            <div style="background: #2563eb; border-radius: 30px; padding: 30px; max-width: 400px;">
                <img src="{{ asset('images/cont2.jpg') }}" 
                     alt="Reading Book" 
                     class="img-fluid" 
                     style="border-radius: 20px; width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>

{{-- Container3 --}}
<div class="container-fluid p-0" style="background: #dcdcdc; min-height: 50vh;">
    <div class="row g-0 h-100">
        <!-- Left Image Section -->
        <div class="col-md-5 d-flex align-items-center justify-content-center" style="padding: 60px 40px;">
            <div class="text-center">
                <img src="{{ asset('images/cont3.jpg') }}" 
                     alt="Buku Gue Ilank" 
                     class="img-fluid mb-3" 
                     style="max-width: 300px; height: auto;">
            </div>
        </div>
        
        <!-- Right Content Section -->
        <div class="col-md-7 d-flex align-items-center" style="padding: 60px 80px;">
            <div>
                <h2 class="fw-bold mb-4" style="font-size: 2.5rem; color: #000000;">
                    Malas Ke Perpustakaan ? Pinjam Aja
                </h2>
                <p style="font-size: 1rem; color: #4a4a4a; line-height: 1.8; text-align: justify;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Container4 --}}
<div class="container-fluid p-0 mb-0" style="background: #ffffff; min-height: 50vh;">
    <div class="py-5">
        <!-- Heading -->
        <h2 class="text-center fw-bold mb-5" style="font-size: 2.5rem; color: #000000; padding-top: 20px;">
            Fasilitas Lengkap
        </h2>
        
        <!-- Features Grid -->
        <div class="container">
            <div class="row g-4 justify-content-center px-3">
                <!-- Feature 1: 1000+ Buku Tersedia -->
                <div class="col-md-3 col-sm-6">
                    <div class="text-center p-4" style="background: #2563eb; border-radius: 20px; height: 100%;">
                        <div class="mb-3">
                            <img src="{{ asset('images/bukulngkp.jpg') }}" 
                                 alt="Books" 
                                 class="img-fluid" 
                                 style="max-width: 200px; height: 200px;">
                        </div>
                        <h4 class="fw-bold" style="color: #ffffff; font-size: 1.5rem;">1000+</h4>
                        <p class="fw-bold mb-0" style="color: #ffffff; font-size: 1.2rem;">Buku Tersedia</p>
                    </div>
                </div>
                
                <!-- Feature 2: Akses Internet -->
                <div class="col-md-3 col-sm-6">
                    <div class="text-center p-4" style="background: #2563eb; border-radius: 20px; height: 100%;">
                        <div class="mb-3">
                            <img src="{{ asset('images/aksesintrnt.jpg') }}" 
                                 alt="Internet" 
                                 class="img-fluid" 
                                 style="max-width: 200px; height: 200px;">
                        </div>
                        <h4 class="fw-bold" style="color: #ffffff; font-size: 1.5rem;">Akses</h4>
                        <p class="fw-bold mb-0" style="color: #ffffff; font-size: 1.2rem;">Internet</p>
                    </div>
                </div>
                
                <!-- Feature 3: PC High-Spek -->
                <div class="col-md-3 col-sm-6">
                    <div class="text-center p-4" style="background: #2563eb; border-radius: 20px; height: 100%;">
                        <div class="mb-3">
                            <img src="{{ asset('images/pc.jpg') }}" 
                                 alt="Computer" 
                                 class="img-fluid" 
                                 style="max-width: 200px; height: 200px;">
                        </div>
                        <h4 class="fw-bold" style="color: #ffffff; font-size: 1.5rem;">PC</h4>
                        <p class="fw-bold mb-0" style="color: #ffffff; font-size: 1.2rem;">High-Spek</p>
                    </div>
                </div>
                
                <!-- Feature 4: Peminjaman Online -->
                <div class="col-md-3 col-sm-6">
                    <div class="text-center p-4" style="background: #2563eb; border-radius: 20px; height: 100%;">
                        <div class="mb-3">
                            <img src="{{ asset('images/pinjem.jpg') }}" 
                                 alt="Folder" 
                                 class="img-fluid" 
                                 style="max-width: 200px; height: 200px;">
                        </div>
                        <h4 class="fw-bold" style="color: #ffffff; font-size: 1.5rem;">Peminjaman</h4>
                        <p class="fw-bold mb-0" style="color: #ffffff; font-size: 1.2rem;">Online</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
