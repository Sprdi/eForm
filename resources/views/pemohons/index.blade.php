<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Koneksi - eForm bjb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Pemohon</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('pemohons.create') }}" class="btn btn-md btn-primary mb-3">TAMBAH DATA</a>
                        <a href="{{ route('pemohons.export') }}" class="btn btn-md btn-success mb-3">EXPORT EXCEL</a>
                        <a href="{{ route('pemohons.exportPdf') }}" class="btn btn-md btn-danger mb-3">EXPORT PDF</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Grup</th>
                                    <th scope="col">Waktu mulai</th>
                                    <th scope="col">Waktu selesai</th>
                                    <th scope="col" style="width: 20%">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pemohons as $p)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->divisi }}</td>
                                    <td>{{ $p->grup }}</td>
                                    <td>{{ $p->mulai }}</td>
                                    <td>{{ $p->sampai }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pemohons.destroy', $p->id) }}" method="POST">
                                            <a href="{{ route('pemohons.show', $p->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <!-- <a href="{{ route('pemohons.edit', $p->id) }}" class="btn btn-sm btn-primary">EDIT</a> -->
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data pemohon belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $pemohons->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @endif
    </script>
</body>

</html>