<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pendaftaran Disetujui - Pondok Pesantren Nasihatul Mubtadi-ien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            color: #333333;
            margin: 0; padding: 0;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 40px auto;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c7be5;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            line-height: 1.6;
            font-size: 16px;
            margin-bottom: 15px;
        }
        ul {
            background-color: #f0f4ff;
            padding: 15px 20px;
            border-radius: 6px;
            list-style-type: none;
            margin-bottom: 20px;
            color: #1a1a1a;
        }
        ul li {
            padding: 6px 0;
            font-weight: 600;
        }
        .footer {
            font-size: 14px;
            color: #666666;
            border-top: 1px solid #e4e7eb;
            padding-top: 15px;
            margin-top: 25px;
        }
        .signature {
            font-weight: bold;
            color: #2c7be5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Disetujui</h1>
        <p>Assalamu'alaikum <strong>{{ $pendaftaran->nama_lengkap }}</strong>,</p>

        <p>Selamat! Pendaftaran pesantren Anda telah berhasil <strong>disetujui</strong> oleh pihak pesantren.</p>

        <p>Berikut detail pendaftaran Anda:</p>

        <ul>
            <li>Nama Lengkap: {{ $pendaftaran->nama_lengkap }}</li>
            <li>Tempat/Tgl Lahir: {{ $pendaftaran->tempat_tanggal_lahir }}</li>
            <li>Jenis Kelamin: {{ $pendaftaran->jenis_kelamin }}</li>
        </ul>

        <p>Terima kasih telah mendaftar. Silakan datang ke lokasi pesantren pada tanggal 25 Mei 2025 untuk langkah selanjutnya.</p>

        <p class="signature">Salam,<br>Pondok Pesantren Nasihatul Mubtadi-ien</p>

        <div class="footer">
            Email ini dikirim secara otomatis, mohon tidak membalas email ini.
        </div>
    </div>
</body>
</html>
