<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Open Koneksi - EForm bjb</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <!-- form -->
    <div class="logo">
        <a href="#">
            <img src="{{ asset('image/bjb.png') }}" alt="Logo" width="200" class="d-inline-block align-top" />
        </a>
    </div>
    <div class="container">
        <form action="{{ route('pemohons.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="head">
                <h5 class="navbar-text ml-auto"><b>FORM PERMOHONAN</b><br></h5>
                <h6>Open Koneksi Bank BJB</h6>
            </div>
            <!-- data pemohon -->
            <div class="header">
                <h6>DATA PEMOHON</h6>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama"
                            class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"
                            placeholder="sesuai dengan data SDM" />
                        <!-- error message untuk nama -->
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" name="nik"
                            class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}"
                            placeholder="Masukan NIK" />
                        <!-- error message untuk nik -->
                        @error('nik')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat E-mail</label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            placeholder="Masukan Email" />
                        <!-- error message untuk email -->
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lokasi_kerja">Lokasi Kerja</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="divisi" name="divisi"
                                    class="form-control @error('divisi') is-invalid @enderror"
                                    value="{{ old('divisi') }}" placeholder="Masukan Divisi" />
                                <!-- error message untuk divisi -->
                                @error('divisi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="grup" name="grup"
                                    class="form-control @error('grup') is-invalid @enderror"
                                    value="{{ old('grup') }}" placeholder="Masukan Grup" </div>
                                <!-- error message untuk grup -->
                                @error('grup')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- end data pemohon -->
                    <!-- data koneksi -->
                    <div class="header">
                        <h6>INFORMASI KONEKSI</h6>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="kebutuhan">Kebutuhan Akses</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kebutuhan"
                                                id="production" value="production"
                                                {{ old('kebutuhan') == 'production' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="production">Production</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kebutuhan"
                                                id="development" value="development"
                                                {{ old('kebutuhan') == 'development' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="development">Development</label>
                                        </div>
                                    </div>
                                    <!-- error message untuk kebutuhan -->
                                    @error('kebutuhan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="akses">Akses koneksi</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="akses" id="internal"
                                                value="internal" {{ old('akses') == 'internal' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="internal">Internal</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="akses"
                                                id="pihakKetiga" value="pihakKetiga"
                                                {{ old('akses') == 'pihakKetiga' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="pihakKetiga">Pihak Ketiga</label>
                                        </div>
                                    </div>
                                    <!-- error message untuk akses -->
                                    @error('akses')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="koneksiAplikasi">Nama Aplikasi/Koneksi</label>
                                <input type="text" id="koneksiAplikasi" name="koneksiAplikasi"
                                    class="form-control @error('koneksiAplikasi') is-invalid @enderror"
                                    value="{{ old('koneksiAplikasi') }}"
                                    placeholder="Masukan Nama Aplikasi/Koneksi" />
                                <!-- error message untuk koneksi aplikasi -->
                                @error('koneksiAplikasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jangkaWaktu">Jangka waktu</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="date" id="mulai" name="mulai"
                                            class="form-control @error('mulai') is-invalid @enderror"
                                            value="{{ old('mulai') }}" placeholder="Masukan Tanggal Mulai" />
                                        <!-- error message untuk mulai -->
                                        @error('mulai')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" id="sampai" name="sampai"
                                            class="form-control @error('sampai') is-invalid @enderror"
                                            value="{{ old('sampai') }}" placeholder="Masukan Tanggal Selesai" />
                                        <!-- error message untuk sampai -->
                                        @error('sampai')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" id="ipSource" name="ipSource"
                                            class="form-control @error('ipSource') is-invalid @enderror"
                                            value="{{ old('ipSource') }}" placeholder="IP Source" />
                                        <!-- error message untuk ip source -->
                                        @error('ipSource')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" id="ipDestination" name="ipDestination"
                                            class="form-control @error('ipDestination') is-invalid @enderror"
                                            value="{{ old('ipDestination') }}" placeholder="IP destination" />
                                        <!-- error message untuk ip destination -->
                                        @error('ipDestination')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" id="port" name="port"
                                            class="form-control @error('port') is-invalid @enderror"
                                            value="{{ old('port') }}" placeholder="Port" />
                                        <!-- error message untuk port -->
                                        @error('port')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="initiateConnection"><i>Initiate Connection</i></label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="initiateConnection"
                                                id="bankBjb" value="bankBjb"
                                                {{ old('initiateConnection') == 'bankBjb' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="bankBjb">bank bjb</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="initiateConnection"
                                                id="pihakKetiga" value="pihakKetiga"
                                                {{ old('initiateConnection') == 'pihakKetiga' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="pihakKetiga">Pihak Ketiga</label>
                                        </div>
                                    </div>
                                    <!-- error message untuk initiateConnection -->
                                    @error('initiateConnection')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="lampiran">Lampiran</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lampiran"
                                                id="topologyAplikasi" value="topologyAplikasi"
                                                {{ old('lampiran') == 'topologyAplikasi' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="topologyAplikasi">Topology
                                                Aplikasi</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lampiran"
                                                id="brd" value="brd"
                                                {{ old('lampiran') == 'brd' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="brd">BRD</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lampiran"
                                                id="perjanjianKerjasama" value="perjanjianKerjasama"
                                                {{ old('lampiran') == 'perjanjianKerjasama' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="perjanjianKerjasama">Perjanjian
                                                Kerjasama</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lampiran"
                                                id="lainnya" value="lainnya"
                                                {{ old('lampiran') == 'lainnya' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="lainnya">Lainnya...</label>
                                        </div>
                                    </div>
                                    <!-- error message untuk lampiran -->
                                    @error('lampiran')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end data koneksi -->
                    <!-- submit -->
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-primary" />
                        <input type="reset" value="Reset" class="btn btn-warning" />
                    </div>
                    <!-- end submit -->
        </form>
    </div>
    <!-- footer -->
    <footer>
        <div class="row">
            <div class="col-md-4">
                <h5>Kantor Pusat</h5>
                <ul>
                    <li>Menara Bank BJB</li>
                    <li>Jl. Naripan No. 12-14</li>
                    <li>Bandung 40111</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Hubungi Kami</h5>
                <a href="#">
                    <p>14049</p>
                </a>
            </div>
            <div class="col-md-4">
                <h5>Media Sosial</h5>
                <ul>
                    <li>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>
