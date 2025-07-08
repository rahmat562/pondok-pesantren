@extends('app')

@section('title', 'Galeri Pembangunan')

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
        cursor: pointer;
        position: relative;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        transform: scale(1.05);
        z-index: 2;
    }

    .gallery-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
        border-radius: 8px;
    }

    .caption {
        position: absolute;
        bottom: 0;
        background: rgba(33, 37, 41, 0.7);
        color: #fff;
        width: 100%;
        padding: 10px;
        font-weight: 600;
        text-align: center;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .caption {
        opacity: 1;
    }
</style>
@endsection

@section('content')
<div class="container section">
    <h1 class="text-center mb-3">Galeri Pembangunan Pesantren</h1>
    <p class="text-center mb-2">Dokumentasi Pembangunan Pondok Pesantren Nasihatul Mubtadi-ien.</p>
    <div class="d-flex justify-content-center mb-4 gap-3" style="flex-wrap: wrap;">
<div class="video-container" style="position: relative; width: 600px; padding-bottom: 30%; height: 0; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <iframe src="https://www.youtube.com/embed/KVvzZ7VCJ1k" frameborder="0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
        </div>
    </div>
    <div class="gallery">
        <div class="gallery-item" tabindex="0">
            <img src="{{ asset('img/pembangunan1.png') }}" alt="Pembangunan 1">
        </div>
        <div class="gallery-item" tabindex="0">
            <img src="{{ asset('img/pembangunan2.png') }}" alt="Pembangunan 2">
        </div>
        <div class="gallery-item" tabindex="0">
            <img src="{{ asset('img/pembangunan3.png') }}" alt="Pembangunan 3">
        </div>
        <div class="gallery-item" tabindex="0">
            <img src="{{ asset('img/pembangunan4.png') }}" alt="Pembangunan 4">
        </div>
    </div>
</div>
@endsection
