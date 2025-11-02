@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')

<div class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-5">Ibyora Beads</h1>
                <p class="lead">UMKM kerajinan manik-manik — produk unik, buatan tangan, dan berkualitas tinggi. Kami membuat aksesori dan dekorasi tradisional yang modern untuk pasar lokal dan internasional.</p>
                <p>Temukan koleksi produk kami, pesan secara online, atau kunjungi toko fisik kami untuk melihat langsung pilihan terbaik.</p>

                <div class="mt-4">
                    <a href="{{ url('/products') }}" class="btn btn-primary btn-lg me-2">Lihat Produk</a>
                    <a href="#contact" class="btn btn-outline-secondary btn-lg">Kontak</a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <!-- Example image placeholder -->
                <img src="{{ asset('images/hero-beads.jpg') }}" alt="Ibyora Beads" class="img-fluid rounded shadow-sm" style="max-height:350px; object-fit:cover;">
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <h3>Tentang UMKM</h3>
            <p>Ibyora Beads adalah usaha mikro kecil dan menengah (UMKM) yang fokus pada pembuatan kerajinan manik-manik. Semua produk dibuat oleh pengrajin lokal dengan perhatian pada detail dan kualitas. Kami mendukung pemberdayaan komunitas melalui pelatihan dan kesempatan kerja.</p>

            <h5 class="mt-4">Alamat / Lokasi</h5>
            <p>Jl. Contoh Alamat No. 123<br>Kel. Contoh, Kecamatan Contoh, Kota Contoh<br>Negara</p>

            <!-- Optional: replace href with real Google Maps link or embed an iframe -->
            <p><a href="https://www.google.com/maps/search/Jl.+Contoh+Alamat+No.+123" target="_blank" rel="noopener">Lihat di Google Maps</a></p>

            <h5 class="mt-4">Kontak</h5>
            <ul class="list-unstyled">
                <li><strong>Telepon:</strong> <a href="tel:+621234567890">+62 12 3456 7890</a></li>
                <li><strong>Email:</strong> <a href="mailto:info@ibyorabeds.example">info@ibyorabeds.example</a></li>
                <li><strong>Jam Operasional:</strong> Senin - Sabtu, 09:00 - 17:00</li>
            </ul>
        </div>

        <div class="col-lg-4" id="contact">
            <h5>Sosial Media</h5>
            <p>Kunjungi dan ikuti akun sosial media kami untuk update produk dan promo:</p>

            <div class="d-grid gap-2">
                <a href="https://www.instagram.com/your_instagram" target="_blank" rel="noopener" class="btn btn-outline-dark text-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram me-2" viewBox="0 0 16 16">
                        <path d="M8 3.163c1.68 0 1.88.006 2.54.037.65.03 1.003.138 1.237.23.31.118.532.26.765.493.233.233.375.455.493.765.092.234.2.587.23 1.237.031.66.037.86.037 2.54s-.006 1.88-.037 2.54c-.03.65-.138 1.003-.23 1.237-.118.31-.26.532-.493.765-.233.233-.455.375-.765.493-.234.092-.587.2-1.237.23-.66.031-.86.037-2.54.037s-1.88-.006-2.54-.037c-.65-.03-1.003-.138-1.237-.23-.31-.118-.532-.26-.765-.493-.233-.233-.375-.455-.493-.765-.092-.234-.2-.587-.23-1.237C3.169 9.94 3.163 9.74 3.163 8s.006-1.88.037-2.54c.03-.65.138-1.003.23-1.237.118-.31.26-.532.493-.765.233-.233.455-.375.765-.493.234-.092.587-.2 1.237-.23C6.12 3.169 6.32 3.163 8 3.163z"/>
                        <path d="M8 0C6.326 0 6.1.006 5.435.037 4.77.068 4.2.18 3.72.354a3.92 3.92 0 0 0-1.42.867A3.92 3.92 0 0 0 .354 2.64C.18 3.12.068 3.69.037 4.355.006 5.02 0 5.246 0 6.92v2.16c0 1.674.006 1.9.037 2.565.031.665.143 1.235.317 1.715.197.536.47 1.02.867 1.42.397.397.884.67 1.42.867.48.174 1.05.286 1.715.317.665.031.891.037 2.565.037h2.16c1.674 0 1.9-.006 2.565-.037.665-.031 1.235-.143 1.715-.317a3.92 3.92 0 0 0 1.42-.867 3.92 3.92 0 0 0 .867-1.42c.174-.48.286-1.05.317-1.715.031-.665.037-.891.037-2.565V6.92c0-1.674-.006-1.9-.037-2.565-.031-.665-.143-1.235-.317-1.715a3.92 3.92 0 0 0-.867-1.42A3.92 3.92 0 0 0 13.28.354C12.8.18 12.23.068 11.565.037 10.9.006 10.674 0 9 0H8z"/>
                    </svg>
                    Instagram
                </a>

                <a href="https://www.tiktok.com/@your_tiktok" target="_blank" rel="noopener" class="btn btn-outline-dark text-start">
                    <!-- Simple TikTok glyph -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 24 24"><path d="M9 5v6.5A3.5 3.5 0 1 0 12.5 15V7h3A5 5 0 1 1 9 5z"/></svg>
                    TikTok
                </a>

                <a href="https://www.facebook.com/your_facebook" target="_blank" rel="noopener" class="btn btn-outline-dark text-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook me-2" viewBox="0 0 16 16"><path d="M8.94 6.22H8V5.08c0-.33.08-.56.5-.56h.44V3.02C9.07 3 8.64 3 8.12 3 6.89 3 6 3.92 6 5.43V6.22H5v1.66h1V13h2.02V7.88h1.36L9.94 6.22z"/></svg>
                    Facebook
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
