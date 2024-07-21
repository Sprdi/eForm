<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Pemohon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray; height: 100vh;">

    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <h3>{{ $pemohon->nama }}</h3>
                            <hr />
                            <p>NIK: {{ $pemohon->nik }}</p>
                            <p>Email: {{ $pemohon->email }}</p>
                            <p>Divisi: {{ $pemohon->divisi }}</p>
                            <p>Grup: {{ $pemohon->grup }}</p>
                            <p>Kebutuhan: {{ $pemohon->kebutuhan }}</p>
                            <p>Akses: {{ $pemohon->akses }}</p>
                            <p>Koneksi Aplikasi: {{ $pemohon->koneksiAplikasi }}</p>
                            <p>Waktu Mulai: {{ $pemohon->mulai }}</p>
                            <p>Waktu Selesai: {{ $pemohon->sampai }}</p>
                            <p>IP Source: {{ $pemohon->ipSource }}</p>
                            <p>IP Destination: {{ $pemohon->ipDestination }}</p>
                            <p>Port: {{ $pemohon->port }}</p>
                            <p>Initiate Connection: {{ $pemohon->initiateConnection }}</p>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>