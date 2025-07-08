@extends('app')

@section('title', 'Program Pesantren')

@section('styles')
@endsection

@section('content')
<div class="container section">
    <h2 class="text-center">Program Pondok Pesantren Nasihatul Mubtadi-ien</h2>
    <p class="text-center mb-4">Pesantren Nasihatul Mubtadi-ien dengan sistem pendidikan salafiyah merupakan pesantren tradisional yang berkomitmen melestarikan nilai-nilai keislaman klasik yang telah diwariskan oleh para ulama terdahulu. 
                    Berdiri di atas semangat keilmuan dan akhlak, pesantren ini menjadi tempat bagi para santri untuk memperdalam ilmu agama, khususnya melalui kajian kitab kuning, serta membentuk pribadi yang tawadhu, mandiri, dan berakhlakul karimah.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card p-4 mb-4">
                <h4 class="card-title">Ibtidaiyah</h4>
                <p>Pendidikan dasar yang menekankan pembelajaran aksara Pegon, dasar-dasar membaca Al-Qur'an, dan pengenalan ilmu agama dasar.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-4">
                <h4 class="card-title">Tsanawiyah</h4>
                <p>Program menengah yang fokus pada penghafalan Al-Qur'an, pembelajaran sejarah Al-Qur'an, dan pengembangan ilmu agama yang lebih mendalam.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-4">
                <h4 class="card-title">Aliyah</h4>
                <p>Pendidikan lanjutan yang mencakup penafsiran kitab-kitab kuning, pembelajaran ilmu Fiqih, Hadist, dan pengembangan akhlak mulia.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 mb-4">
                <h4 class="card-title">Kegiatan dan Fasilitas</h4>
                <p><li>Pengajian rutin dan kajian </li>
                    <li>Asrama yang nyaman dan aman</li>
                    <li>Kegiatan ekstrakurikuler seni</li>
                    <li>Pelatihan kepemimpinan dan karakter</li></p>
            </div>
        </div>
    </div>
</div>
@endsection
