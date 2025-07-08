<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
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
            max-width: 100%;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<main>
<section class="section">
    <div class="container">
        <form action="{{ url('/logout') }}" method="POST" class="d-flex justify-content-end mb-3">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
          </form>
        <div class="card p-4">
            <h4 class="text-center mb-4">Dashboard Admin</h4>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Tempat/Tgl Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Orang Tua/Wali</th>
                        <th>Alamat</th>
                        <th>Nomer Tlp</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $row->nama_lengkap }}</td>
                            <td>{{ $row->tempat_tanggal_lahir }}</td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->nama_orang_tua_wali }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>{{ $row->nomer_telpon }}</td>
                            <td>{{ $row->email }}</td>
                           <td class="text-center">
                                <div class="d-flex gap-1 justify-content-center">
                                    @if($row->status != 'approved')
                                        <form action="{{ route('admin.approve', $row->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Setujui pendaftaran ini?')">Approve</button>
                                        </form>
                                    @else
                                        <span class="badge bg-success align-self-center">Approved</span>
                                    @endif

                                    {{-- Tombol Delete --}}
                                    <form action="{{ route('admin.delete', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <td>
   

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
