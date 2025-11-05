@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section dengan Video Background -->
<div class="position-relative" style="height: 100vh; overflow: hidden;">
    <!-- Video Background -->
    <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100"
        style="width:100vw; height:100vh; object-fit:cover; z-index:0;">
        <source src="{{ asset('videos/video_promosi.mp4') }}" type="video/mp4">
    </video>

    <!-- Overlay Transparan -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.45); z-index: 1;">
    </div>

    <!-- Konten Hero -->
    <div class="container d-flex flex-column justify-content-center align-items-center text-center text-white position-relative"
        style="height: 100vh; z-index: 2;">
        <div class="col-lg-8 mx-auto">
            <h1 class="fw-bold mb-3" style="font-size: 2.5rem;">
                Solusi Perhiasan <span style="color:#ff4da6;">Handmade</span> yang Elegan dan Berarti
            </h1>
            <p class="lead mb-4">
                Ibyora Beads adalah UMKM yang menghadirkan koleksi perhiasan dan dekorasi manik-manik buatan tangan.
                Setiap karya kami dibuat dengan ketelitian dan cinta, mencerminkan keindahan tradisi yang berpadu dengan
                sentuhan modern.
            </p>
            <a href="{{ url('/about') }}" class="btn btn-light btn-lg rounded-pill px-4 fw-semibold shadow">
                Lihat Produk
            </a>
        </div>
    </div>
</div>

<!-- Bagian Produk -->
<section class="container my-5">
    <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- SLIDE 1: Produk Terpopuler -->
            <div class="carousel-item active">
                <h2 class="text-center fw-bold mb-4 text-pink">Produk Ter-Populer</h2>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-lg-2 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('images/lucu 1.jpg') }}" class="card-img-top" alt="Produk 1">
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Sweet Charm Bracelet Rose</h6>
                                <p class="text-muted mb-0">Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('images/lucu 2.jpg') }}" class="card-img-top" alt="Produk 2">
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Sweet Charm Bracelet Blue</h6>
                                <p class="text-muted mb-0">Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('images/lucu 3.jpg') }}" class="card-img-top" alt="Produk 3">
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Sweet Charm Bracelet White</h6>
                                <p class="text-muted mb-0">Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2: Produk Couple -->
            <div class="carousel-item">
                <h2 class="text-center fw-bold mb-4 text-pink">Produk Ter-Couple</h2>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-lg-2 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('images/couple 1.jpg') }}" class="card-img-top" alt="Produk 4">
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Couple Bracelet Spider</h6>
                                <p class="text-muted mb-0">Rp 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('images/couple 2.jpg') }}" class="card-img-top" alt="Produk 5">
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Couple Bracelet Spider</h6>
                                <p class="text-muted mb-0">Rp 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('images/couple 3.jpg') }}" class="card-img-top" alt="Produk 6">
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Couple Bracelet Spider</h6>
                                <p class="text-muted mb-0">Rp 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('images/couple 4.jpg') }}" class="card-img-top" alt="Produk 7">
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">Couple Bracelet Spider</h6>
                                <p class="text-muted mb-0">Rp 15.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigasi -->
        <button class="carousel-control-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Selanjutnya</span>
        </button>
    </div>
</section>
@endsection
