<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Pemohons</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 2px;
            text-align: left;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        h3 {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <h3>Data Pemohon</h3>
    </div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Email</th>
                <th>Divisi</th>
                <th>Grup</th>
                <th>Kebutuhan</th>
                <th>Akses</th>
                <th>Koneksi Aplikasi</th>
                <th>Mulai</th>
                <th>Sampai</th>
                <th>IP Source</th>
                <th>IP Destination</th>
                <th>Port</th>
                <th>Initiate Connection</th>
                <th>Lampiran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemohons as $index => $p)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ $p->grup }}</td>
                <td>{{ $p->kebutuhan }}</td>
                <td>{{ $p->akses }}</td>
                <td>{{ $p->koneksiAplikasi }}</td>
                <td>{{ $p->mulai }}</td>
                <td>{{ $p->sampai }}</td>
                <td>{{ $p->ipSource }}</td>
                <td>{{ $p->ipDestination }}</td>
                <td>{{ $p->port }}</td>
                <td>{{ $p->initiateConnection }}</td>
                <td>{{ $p->lampiran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>