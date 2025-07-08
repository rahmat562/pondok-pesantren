@extends('app')

@section('title', 'Welcome')
@section('styles')
<style>


        .hero {
            background: url('img/foto1.png') no-repeat center center;
            background-size: cover;
            height: 400px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 6px #000;
        }

        .section {  
            padding: 30px 0;
        }



        .profile-photo {
            max-width: 250px;
            border-radius: 50%;
            /* Removed green border as per user feedback */
            border: none;
        }

        .profile-card {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            padding: 30px;
            color: #212529;
        }

        .profile-info h2 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .profile-info p {
            font-size: 1.1rem;
        }

        @media (max-width: 767px) {
            .profile-card {
                padding: 20px;
            }
        }
        
</style>
@endsection
@section('content')
<header class="hero text-center">
    <div>
        <h1 class="display-5 fw-bold">نصيحة المبتدئين</h1>
    </div>
</header>

<main>
    <section class="section">
        <div class="container">
            <div class="profile-card text-center">
    <div class="profile-photo-wrapper">
        <img src="{{ asset('img/logo2.png') }}" alt="Foto Profil" class="profile-photo">
    </div>
                <div class="profile-info text-center text-md-center" style="margin-top: 0;">
                    <h3>YAYASAN NASIHATUL MUBTADI-IEN</h3>
                    <p class="lead">nasihatul.mubtadiien@gmail.com <br>
                    <strong>Kep Menkum dan Ham RI Nomor :</strong> AHU-0011242.AH.01.04 Tahun.2021 <br></p>
                    <div class="row text-start text-md-center mt-4">
                <div class="col-md-6 mb-3">
                    <h5><strong>Visi</strong></h5>
                    <p>
                        Menjadikan santri yang berakhlak mulia, kuat dalam ilmu agama, teguh dalam tradisi, dan siap menjadi penerus perjuangan ulama salaf.
                    </p>
                </div>
                <div class="col-md-6">
                    <h5><strong>Misi</strong></h5>
                    <ol class="text-start">
                        <li>Menanamkan ilmu agama melalui kajian kitab kuning dan metode pembelajaran tradisional</li>
                        <li>Membina akhlak dan adab santri dalam kehidupan sehari-hari melalui keteladanan dan pembiasaan.</li>
                        <li>Membentuk pribadi santri yang mandiri, disiplin, dan istiqamah di jalan dakwah.</li>
                    </ol>
                </div>
            </div>
                    <!-- Tabel Pengurus Pesantren -->
                <div class="table-responsive mt-4">
                    <table class="table table-bordered text-center">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr><td>1</td><td>Ust. Muhammad Zainul Abidin</td><td>Pimpinan Yayasan</td></tr>
                            <tr><td>2</td><td>Ust. Zakaria Tabrani</td><td>Pembina Yayasan</td></tr>
                            <tr><td>3</td><td>Ust. Sirojudin S.Sos</td><td>Pengawas</td></tr>
                            <tr><td>4</td><td>Ahmad Baidillah</td><td>Sekretaris</td></tr>
                            <tr><td>5</td><td>Ihza Alfarisy</td><td>Bendahara</td></tr>
                            <tr><td>6</td><td>Dwi Ade Candra</td><td>Koordinator Sosial</td></tr>
                            <tr><td>7</td><td>Kurniawan Agung</td><td>Koordinator Pesantren  dan Humas</td></tr>
                            <tr><td>7</td><td>Kholilul Rahman</td><td>Koordinator Sarana dan Prasarana</td></tr>
                            <tr><td>8</td><td>Anggun Tuti Alawiyah</td><td>Koordinator Administrasi </td></tr>
                        </tbody>
                    </table>
                </div>
                    <!-- Google Maps Embed -->
                <div class="d-flex justify-content-center mt-4">
                    <div class="map-container mt-4" style="width: 80%; height: 350px;">
<iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.927927927927!2d106.6190822!3d-6.2553183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d2e3747b07d%3A0x6500eaf2a8d8cbb2!2sPonpes%20Nasihatul%20Mubtadi-ien%20Jaticempaka!5e0!3m2!1sen!2sid!4v1686000000000" 
    width="100%" 
    height="100%" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
