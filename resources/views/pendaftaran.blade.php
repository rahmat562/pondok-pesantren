@extends('app')

@section('title', 'Pendaftaran')

@section('styles')

@endsection

@section('content')
<main>
<section class="section">
    <div class="container">
        <div class="card p-4">
            <h4 class="text-center mb-4">Formulir Pendaftaran</h4>

            @if(session('success'))
                <script>
                    window.onload = function () {
                        var modal = new bootstrap.Modal(document.getElementById('successModal'));
                        modal.show();
                    };
                </script>
            @endif

            <form method="POST" action="{{ route('pendaftaran.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="tempat" class="form-label">Tempat/Tgl lahir</label>
                    <input type="text" name="tempat" id="tempat" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                        <option value="" disabled selected></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="ortu" class="form-label">Nama Orang Tua/Wali</label>
                    <input type="text" name="ortu" id="ortu" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="nomer" class="form-label">Nomer.Tlp</label>
                    <input type="text" name="nomer" id="nomer" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Daftar</button>
                </div>
            </form>

            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-success text-white">
                            <h5 class="modal-title">Berhasil!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body ">
                            Pendaftaran anda berhasil dikirim.<br>
                            Silakan tunggu konfirmasi dari kami.<br>
                            Cek email anda secara berkala untuk melihat kelanjutan pendaftaran anda.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
</main>
@endsection
