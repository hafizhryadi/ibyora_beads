<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Ibyora Beads') }} - @yield('title')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        :root {
            --pink-main: #ff69b4;
            --pink-light: #ffe4f0;
            --text-dark: #333;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
        }

        /* Navbar */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 8px;
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            margin-left: 18px;
        }

        .nav-link:hover {
            color: var(--pink-main) !important;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(90deg, var(--pink-light) 0%, white 100%);
            padding: 100px 0;
        }

        .hero h1 {
            font-weight: 700;
            font-size: 2.8rem;
            color: var(--text-dark);
        }

        .hero span {
            color: var(--pink-main);
        }

        .hero p {
            color: #555;
            font-size: 1.1rem;
        }

        /* Feature Cards */
        .feature-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 30px;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            background-color: var(--pink-light);
            padding: 60px 0 30px;
            text-align: center;
        }

        footer h5 {
            color: var(--pink-main);
            font-weight: 700;
        }

        footer p,
        footer a {
            color: #555;
            text-decoration: none;
        }

        footer a:hover {
            color: var(--pink-main);
        }

        .social-icons a {
            font-size: 1.6rem;
            margin: 0 8px;
            color: #555;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--pink-main);
        }

        .social-icons a {
            font-size: 1.6rem;
            margin: 0 10px;
            color: #555;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--pink-main);
            transform: scale(1.2);
        }
    </style>

    @stack('head')
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('images/hero-beads.png') }}" alt="Ibyora Logo">
                Ibyora Beads
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Produk</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <!-- ALAMAT -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Alamat</h5>
                    <p>
                        Ibyora Beads<br>
                        Jl. Ki Anwar Mangku, Lr. Sriraya 5<br>
                        Palembang, Sumatera Selatan 30266<br>
                        Indonesia
                    </p>
                </div>

                <!-- KONTAK -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Kontak</h5>
                    <p class="mb-1">
                        <i class="bi bi-telephone"></i> +62 812 3456 7890<br>
                        <i class="bi bi-envelope"></i>
                        <a href="mailto:info@ibyora.com" class="text-decoration-none text-dark">info@ibyora.com</a>
                    </p>

                    <!-- Sosial Media -->
                    <div class="social-icons mt-2">
                        <a href="https://wa.me/6285357611044" target="_blank" title="WhatsApp"><i
                                class="bi bi-whatsapp"></i></a>
                        <a href="https://www.instagram.com/ibyora.beads?igsh=YnNuOWc3Y2Nwdm1r&utm_source=qr"
                            target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@ibyora.beads?_r=1&_t=ZS-914pjXMxmTd" target="_blank"
                            title="TikTok"><i class="bi bi-tiktok"></i></a>
                        <a href="https://id.shp.ee/rwDpoUy" target="_blank" title="Shopee"><i
                                class="bi bi-shop"></i></a>
                    </div>
                </div>

                <!-- TAUTAN -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Tautan</h5>
                    <ul class="list-unstyled d-inline-block text-start">
                        <li><a href="{{ url('/') }}" class="text-decoration-none text-dark">Home</a></li>
                        <li><a href="{{ url('/about') }}" class="text-decoration-none text-dark">About</a></li>
                        <li><a href="{{ url('/products') }}" class="text-decoration-none text-dark">Produk</a></li>
                    </ul>
                </div>
            </div>

            <hr class="mt-5 mb-3 mx-auto" style="width: 80%;">

            <!-- COPYRIGHT -->
            <div class="text-center text-muted small">
                © 2025 Ibyora Beads. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
