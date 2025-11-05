@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

{{-- BAGIAN TENTANG --}}
<section id="tentang" class="py-5" style="background-color:#fff;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- KIRI: TEKS TENTANG -->
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4 text-center text-lg-start" style="color:#ff4da6;">Tentang Ibyora Beads</h2>
                <p class="lead" style="text-align: justify;">
                    <strong>Ibyora Beads</strong> adalah usaha kreatif asal Palembang yang berdiri sejak tahun 2025.
                    Kami fokus membuat berbagai produk handmade berbahan dasar manik-manik dengan desain unik dan
                    bernilai seni tinggi. Selain menghadirkan koleksi siap pakai, Ibyora Beads juga menerima pesanan
                    custom sesuai permintaan pelanggan — mulai dari pemilihan warna hingga desain yang diinginkan.
                </p>
            </div>

            <!-- KANAN: LOGO -->
            <div class="col-lg-4 text-center">
                <img src="{{ asset('images/hero-beads.png') }}" alt="Logo Ibyora Beads"
                     class="img-fluid shadow-sm"
                     style="max-width: 300px; border-radius: 16px;">
            </div>
        </div>
    </div>
</section>

{{-- BAGIAN VISI & MISI --}}
<section id="visi-misi" class="py-4" style="background-color:#fff7fb;">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="fw-bold" style="color:#ff4da6;">Visi & Misi Ibyora Beads</h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5 mb-4">
                <div class="p-4 rounded-3 shadow-sm" style="background-color:#ffffff;">
                    <h5 class="fw-bold mb-3" style="color:#ff4da6;">Visi</h5>
                    <p style="text-align: justify;">
                        Menjadi brand aksesoris handmade lokal yang dikenal karena keunikan desain, kualitas, dan
                        sentuhan personal dalam setiap karya, serta menginspirasi kepercayaan diri dan gaya
                        setiap pemakainye.
                    </p>
                </div>
            </div>

            <div class="col-md-5 mb-4">
                <div class="p-4 rounded-3 shadow-sm" style="background-color:#ffffff;">
                    <h5 class="fw-bold mb-3" style="color:#ff4da6;">Misi</h5>
                    <ul class="text-start" style="list-style-type: disc; padding-left: 20px;">
                        <li>Menghadirkan produk aksesoris handmade berkualitas dengan desain yang estetik dan personal.</li>
                        <li>Memberikan kesempatan bagi pelanggan untuk berkreasi melalui sistem custom request (warna, beads, dan tema).</li>
                        <li>Menjaga kualitas bahan agar produk tetap awet, nyaman, dan bernilai tinggi meski dengan harga terjangkau.</li>
                        <li>Meningkatkan kreativitas dan pemberdayaan perajin lokal.</li>
                        <li>Membangun hubungan baik dengan pelanggan melalui pelayanan ramah dan komunikasi terbuka.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PEMISAH VISUAL --}}
<div style="height:40px; background-color:#ffeaf5;"></div>

{{-- BAGIAN PRODUK --}}
<section id="produk" class="py-5" style="background-color:#fff;">
    <div class="container text-center">
        <h3 class="fw-bold mb-4" style="color:#ff4da6;">Produk Kami</h3>

        <div class="row g-4">
            @php
                $produk = [
                    ['lucu 1.jpg', 'Sweet Charm Bracelet Rose', 50000],
                    ['lucu 2.jpg', 'Sweet Charm Bracelet Blue', 50000],
                    ['lucu 3.jpg', 'Sweet Charm Bracelet White', 50000],
                    ['lucu 4.jpg', 'Sweet Charm Bracelet Pink', 50000],
                    ['bunga 1.jpg', 'Flower Bracelet Blue Pink', 35000],
                    ['bunga 2.jpg', 'Flower Bracelet Pink', 35000],
                    ['bunga 3.jpg', 'Flower Bracelet Red', 35000],
                    ['bunga 4.jpg', 'Flower Bracelet Blue', 35000],
                    ['couple 1.jpg', 'Couple Bracelet Spider', 15000],
                    ['couple 2.jpg', 'Couple Bracelet Spider', 15000],
                    ['couple 3.jpg', 'Couple Bracelet Spider', 15000],
                    ['couple 4.jpg', 'Couple Bracelet Spider', 15000],
                    ['gantungan kunci 1.jpg', 'Aesthetic Bow Keychain', 25000],
                    ['gantungan kunci 2.jpg', 'Aesthetic Bow Keychain', 25000],
                    ['gantungan kunci 3.jpg', 'Aesthetic Bow Keychain', 25000],
                    ['gantungan kunci 4.jpg', 'Aesthetic Bow Keychain', 25000],
                    ['scrap hp 1.jpg', 'Phone Strap Black', 35000],
                    ['scrap hp 2.jpg', 'Phone Strap Pink', 35000],
                    ['scrap hp 3.jpg', 'Phone Strap Rose', 35000],
                    ['scrap hp 4.jpg', 'Phone Strap Blue', 35000],
                ];
            @endphp

            @foreach ($produk as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100"
                         style="border-radius:12px; background-color:#ffffff; transition:transform 0.2s, box-shadow 0.2s;">
                        <img src="{{ asset('images/' . $item[0]) }}" class="card-img-top"
                             alt="{{ $item[1] }}"
                             style="border-top-left-radius:12px; border-top-right-radius:12px; height:200px; object-fit:cover;">
                        <div class="card-body">
                            <h6 class="fw-bold">{{ $item[1] }}</h6>
                            <p class="text-muted">Rp{{ number_format($item[2], 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- PEMISAH VISUAL --}}
<div style="height:40px; background-color:#ffeaf5;"></div>

{{-- BAGIAN REVIEW --}}
<section id="review" class="py-5" style="background-color:#f9f9f9;">
    <div class="container text-center">
        <h3 class="fw-bold mb-4" style="color:#ff4da6;">Ulasan Pelanggan</h3>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100" style="background-color:#fff; border-radius:16px;">
                    <img src="{{ asset('images/riview 1.jpg') }}" class="rounded-circle mx-auto mb-3"
                         style="width:90px;height:90px;object-fit:cover;">
                    <p class="fst-italic mb-2">"Produk Ibyora sangat cantik dan berkualitas! Saya suka banget sama detail maniknya."</p>
                    <h6 class="fw-bold mb-0" style="color:#ff4da6;">– Suci</h6>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100" style="background-color:#fff; border-radius:16px;">
                    <img src="{{ asset('images/riview 2.jpg') }}" class="rounded-circle mx-auto mb-3"
                         style="width:90px;height:90px;object-fit:cover;">
                    <p class="fst-italic mb-2">"Kalung couple-nya lucu banget! Pas buat hadiah buat pasangan."</p>
                    <h6 class="fw-bold mb-0" style="color:#ff4da6;">– Liza</h6>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100" style="background-color:#fff; border-radius:16px;">
                    <img src="{{ asset('images/riview 3.jpg') }}" class="rounded-circle mx-auto mb-3"
                         style="width:90px;height:90px;object-fit:cover;">
                    <p class="fst-italic mb-2">"Pengerjaannya rapi dan desainnya unik. Akan beli lagi!"</p>
                    <h6 class="fw-bold mb-0" style="color:#ff4da6;">– Vina Meta & Zalsa</h6>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
