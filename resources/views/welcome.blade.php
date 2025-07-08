@extends('app')

@section('title', 'Welcome')

@section('styles')
<style>
 .hero {
            background: url('img/bg1.png') no-repeat center center;
            background-size: cover;
            height: 600px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 6px #000;
            text-align: center;
        }
</style>
@endsection

@section('content')
<header class="hero">
    <div>
        <h1 class="display-5 fw-bold">Pondok Pesantren Nasihatul Mubtadi-ien</h1>
        <p class="lead">Mencetak Generasi Qurani, Berilmu dan Berakhlak Mulia</p>
        <a href="{{ route('pendaftaran.form') }}" class="btn btn-success mt-3">Pendaftaran</a>
    </div>
</header>

<main>
    <section id="profil" class="section text-center">
        <div class="container">
            <h2 class="mb-4">Tentang Pesantren</h2>
            <p class="lead">Pesantren Nasihatul Mubtadi-ien dengan sistem pendidikan salafiyah merupakan pesantren tradisional yang berkomitmen melestarikan nilai-nilai keislaman klasik yang telah diwariskan oleh para ulama terdahulu. 
                            Berdiri di atas semangat keilmuan dan akhlak, pesantren ini menjadi tempat bagi para santri untuk memperdalam ilmu agama, khususnya melalui kajian kitab kuning, serta membentuk pribadi yang tawadhu, mandiri, dan berakhlakul karimah.</p>
        </div>
    </section>

    <section class="section bg-light text-center">
        <div class="container">
            <h2 class="mb-4">Program Pesantren</h2>
            <div class="row">
                <div class="col-md-4">
                    <h5>Ibtidaiyah</h5>
                    <p>Pembelajaran penerapan aksara Pegon dan Hukum membaca AL-Qur'an.</p>
                </div>
                <div class="col-md-4">
                    <h5>Tsanawiyah</h5>
                    <p>Penghafalan Al-Qur'an dan Pembelajaran sejarah Al-Qur'an.</p>
                </div>
                <div class="col-md-4">
                    <h5>Aliyah</h5>
                    <p >Penafsiran kitab-kitab kuning dan Pembelajaran ilmu Fiqih dan Hadist.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section text-center">
        <div class="container">
            <h2 class="mb-4">Galeri Kegiatan</h2>
            <div class="row">
            <div class="col-md-4 mb-3">
                <a href="{{ route('galeri.pesantren') }}" style="text-decoration: none; color: inherit;">
                    <img src="img/kegiatan2.png" class="img-fluid rounded" alt="Kegiatan 1">
                    <div class="text-center small mt-1" style="color: green; padding: 2px 6px; display: inline-block;">Lihat lainnya</div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ route('galeri.pembangunan') }}" style="text-decoration: none; color: inherit;">
                    <iframe src="https://www.youtube.com/embed/KVvzZ7VCJ1k" frameborder="0" allowfullscreen class="rounded" style="width: 100%; height: 200px;"></iframe>
                    <div class="text-center small mt-1" style="color: green; padding: 2px 6px; display: inline-block;">Lihat lainnya</div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ route('galeri.pesantren') }}" style="text-decoration: none; color: inherit;">
                    <img src="img/kegiatan3.png" class="img-fluid rounded" alt="Kegiatan 3">
                    <div class="text-center small mt-1" style="color: green; padding: 2px 6px; display: inline-block;">Lihat lainnya</div>
                </a>
            </div>
            </div>
        </div>
    </section>
</main>
@endsection
