<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Ponpes Nasihatul Mubtadi-ien')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    body {
        padding-top: 70px;
        flex: 1 0 auto;
    }

    main {
        flex: 1 0 auto;
    }
 
        .section {
            padding: 30px 0;
        }

        .card {
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Menyesuaikan warna navbar di tampilan responsif (burger) */
        .navbar-toggler {
            border-color: #343a40; /* Menyesuaikan dengan warna navbar */
        }
        /* Mengubah latar belakang menu saat burger menu dibuka */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: #212529; /* Sama dengan latar belakang navbar pada tampilan desktop */
                position: absolute; /* Menempatkan navbar di atas konten */
                top: 80px; /* Sesuaikan dengan tinggi navbar */
                width: 100%; /* Membuat navbar penuh lebar */
                left: 0;
                display: block;
                padding-top: 20px;
            }

            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-item {
                margin: 10px 0;
            }

            .navbar-nav .nav-link {
                color: white; /* Menyesuaikan warna teks menu dropdown */
                font-size: 1.2rem;
            }

            .navbar-nav .nav-link:hover {
                color: #00ff00; /* Warna hover yang diinginkan untuk link */
            }
        }

        /* Footer styles */
        .footer {
            background-color: #212529;
            color: white;
            padding: 40px 0 20px 0;
        }

        /* Left align Hubungi Kami heading and content */
        .override-hubungi-kami {
            text-align: left;
        }

        /* Footer styles */
         .footer {
            background-color: #212529;
            color: red;
            text-align: center;
            padding: 20px 0;
            flex-shrink: 0;
          }

        .footer p {
            margin-bottom: 10px;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer .me-4 {
            margin-right: 1.5rem !important;
        }

        .footer i {
            font-size: 1.5rem;
            vertical-align: middle;
        }


       
    </style>
    @yield('styles')
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top px-4 py-3" style="height: 80px;">
    <a class="navbar-brand d-flex align-items-center" href="#" style="gap: 10px; height: 80px; align-items: center;">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 90px; width: auto; max-height: 90px;">
        <span style="font-weight: bold; font-size: 1.2rem; color: white; white-space: nowrap;">PONPES NASIHATUL MUBTADI-IEN</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('program') }}">Program</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Galeri
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('galeri.pembangunan') }}">Galeri Pembangunan</a></li>
                    <li><a class="dropdown-item" href="{{ route('galeri.pesantren') }}">Galeri Pesantren</a></li>
                </ul>
            </li>
<li class="nav-item"><a class="nav-link" href="#hubungi-kami">Kontak</a></li>
        </ul>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer id="hubungi-kami" class="footer bg-dark text-white pt-5 pb-4">
    <div class="container text-md-left">
        <div class="row d-flex text-md-left align-items-center">
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto override-hubungi-kami">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Hubungi Kami</h5>
                <p class="hubungi-kami-text"><strong>Alamat:</strong> Jl. Almadaniah I No.64, RT:008/RW:02, Jaticempaka, Kec. Pd.Gede, Kota Bks, Jawa Barat</p>
                <p class="hubungi-kami-text"><strong>Telepon:</strong> 0895392244562 </p>
                <p class="hubungi-kami-text"><strong>Email:</strong> <a href="mailto:nasihatul.mubtadiien@gmail.com" class="text-white">nasihatul.mubtadiien@gmail.com</a></p>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto d-flex flex-column align-items-center">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Media Sosial</h5>
                <p class="d-flex gap-3 justify-content-center mb-0">
                <a href="https://maps.app.goo.gl/sWeoTP4phpfzMhNb7" target="_blank" rel="noopener noreferrer" aria-label="Google Maps" style="color: #EA4335;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24" role="img" aria-hidden="true">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/>
                    </svg>
                </a>
                <a href="https://wa.me/62895392244562" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" style="color: #25D366;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24" role="img" aria-hidden="true">
                        <path d="M20.52 3.48A11.88 11.88 0 0012 0C5.37 0 0 5.37 0 12a11.88 11.88 0 001.64 6.01L0 24l6.12-1.6A11.88 11.88 0 0012 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.21-3.48-8.52zm-8.52 16.5a8.3 8.3 0 01-4.44-1.3l-.32-.2-3.1.81.83-3.02-.21-.31a8.3 8.3 0 1111.24 4.02zm4.3-5.7c-.23-.12-1.35-.67-1.56-.75-.21-.08-.36-.12-.51.12s-.58.75-.71.9c-.13.15-.26.17-.49.06a6.3 6.3 0 01-1.85-1.14 7.04 7.04 0 01-1.3-1.61c-.14-.24 0-.37.1-.49.1-.1.23-.26.35-.39.12-.13.16-.22.24-.37.08-.15.04-.28-.02-.39-.06-.12-.51-1.23-.7-1.68-.18-.44-.36-.38-.51-.39-.13 0-.28 0-.43 0-.15 0-.39.06-.59.28-.2.22-.77.75-.77 1.83s.79 2.13.9 2.28c.12.15 1.56 2.38 3.78 3.34.53.23.94.37 1.26.47.53.16 1.02.14 1.4.09.43-.06 1.35-.55 1.54-1.08.18-.53.18-.98.13-1.08-.04-.1-.21-.15-.44-.27z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/nasihatul.mubtadiien/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="color: #E1306C;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24" role="img" aria-hidden="true">
                        <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm4.75-.75a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
                    </svg>
                </a>
                <a href="https://web.facebook.com/nashihatul.mubtadiien" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="color: #3b5998;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24" role="img" aria-hidden="true">
                        <path d="M22.675 0h-21.35C.6 0 0 .6 0 1.325v21.351C0 23.4.6 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.466.099 2.797.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.59l-.467 3.622h-3.123V24h6.116C23.4 24 24 23.4 24 22.675V1.325C24 .6 23.4 0 22.675 0z"/>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@nasihatulmubtadi-ienchanne7887" target="_blank" rel="noopener noreferrer" aria-label="YouTube" style="color: #FF0000;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24" role="img" aria-hidden="true">
                        <path d="M23.498 6.186a2.997 2.997 0 00-2.11-2.12C19.64 3.5 12 3.5 12 3.5s-7.64 0-9.388.566a2.997 2.997 0 00-2.11 2.12A31.24 31.24 0 000 12a31.24 31.24 0 00.502 5.814 2.997 2.997 0 002.11 2.12C4.36 20.5 12 20.5 12 20.5s7.64 0 9.388-.566a2.997 2.997 0 002.11-2.12A31.24 31.24 0 0024 12a31.24 31.24 0 00-.502-5.814zM9.75 15.02V8.98l6.5 3.02-6.5 3.02z"/>
                    </svg>
                </a>
                </p>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3 d-flex flex-column align-items-end override-rekening-yayasan">
                <h5 class="rekening-yayasan-text text-uppercase mb-4 font-weight-bold text-warning">Rekening Yayasan</h5>
                <p class="rekening-yayasan-text mb-1"><strong>BJB Syariah:</strong> 523020600813</p>
                <p class="rekening-yayasan-text mb-1"><strong>Mandiri:</strong> 1670004206651</p>
                <p class="rekening-yayasan-text mb-1"><strong>BSI:</strong> 7165773912</p>
                <p class="rekening-yayasan-text mb-1"><strong>BCA:</strong> 6871855622</p>
            </div>
        </div>
        <hr class="mb-4">
        <div class="position-relative text-center">
        <p class="mb-0">© {{ date('Y') }} Ponpes Nasihatul Mubtadi-ien.</p>
        <a href="{{ url('/login') }}" class="position-absolute end-0 top-0">Admin</a>
        </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
