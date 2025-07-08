@extends('app')

@section('title', 'Galeri Pesantren')

@section('styles')
<style>

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .gallery-item {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    .gallery-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    .caption {
        padding: 10px;
        background-color: #f8f9fa;
        text-align: center;
        font-weight: 600;
        color: #212529;
    }
</style>
@endsection

@section('content')
<div class="container section">
    <h1 class="text-center mb-3">Galeri Pesantren Nasihatul Mubtadi-ien</h1>
    <p class="text-center mb-2">Dokumentasi Kegiatan Dan Aktivitas Santri Di Pondok Pesantren Nasihatul Mubtadi-ien.</p>
    <div class="video-gallery" style="display: flex; justify-content: center; gap: 20px; margin-bottom: 20px;">
        <div class="gallery-item" style="max-width: 250px;">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/zVdD8FnB910" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="gallery-item" style="max-width: 250px;">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/j0QozonJjt0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="gallery-item" style="max-width: 250px;">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/a66Ij170thU" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="photo-gallery" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; justify-items: center;">
        <div class="gallery-item" style="max-width: 250px; width: 100%; height: 200px;">
            <img src="{{ asset('img/kegiatan1.png') }}" alt="Kegiatan 1" style="width: 100%; height: 100%; object-fit: cover;">
            <div class="caption">Kegiatan 1</div>
        </div>
        <div class="gallery-item" style="max-width: 250px; width: 100%; height: 200px;">
            <img src="{{ asset('img/kegiatan2.png') }}" alt="Kegiatan 2" style="width: 100%; height: 100%; object-fit: cover;">
            <div class="caption">Kegiatan 2</div>
        </div>
        <div class="gallery-item" style="max-width: 250px; width: 100%; height: 200px;">
            <img src="{{ asset('img/kegiatan3.png') }}" alt="Kegiatan 3" style="width: 100%; height: 100%; object-fit: cover;">
            <div class="caption">Kegiatan 3</div>
        </div>
        <div class="gallery-item" style="max-width: 250px; width: 100%; height: 200px;">
            <img src="{{ asset('img/kegiatan4.png') }}" alt="Kegiatan 4" style="width: 100%; height: 100%; object-fit: cover;">
            <div class="caption">Kegiatan 4</div>
        </div>
    </div>
</div>
@endsection
