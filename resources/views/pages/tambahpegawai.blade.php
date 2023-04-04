@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tambah Pegawai'])
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah Pegawai</p>   
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Data Registrasi Pegawai</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nomor Register</label>
                                    <input class="form-control" type="text" name="no_register" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nomor Induk Pegawai (NIP)</label>
                                    <input class="form-control" type="text" name="nip_baru" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nomor Kartu Pegawai</label>
                                    <input class="form-control" type="text" name="no_karpeg" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nomor Induk Kepundudukan (NIK)</label>
                                    <input class="form-control" type="text" name="no_ktp" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">NPWP</label>
                                    <input class="form-control" type="text" name="npwp" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nomor BPJS</label>
                                    <input class="form-control" type="text" name="no_bpjs" placeholder="">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Identitas Pegawai</p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Pegawai</label>
                                    <input class="form-control" type="text" name="nama" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dropup">
                                    <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                    <input class="form-control" type="text" name="kd_jk" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Agama</label>
                                    <input class="form-control" type="text" name="kd_agama" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Status Perkawinan</label>
                                    <input class="form-control" type="text" name="kd_statusmarital" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">RT</label>
                                    <input class="form-control" type="text" name="rt" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">RW</label>
                                    <input class="form-control" type="text" name="rw" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Provinsi</label>
                                    <input class="form-control" type="text" name="id_provinsi" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kota / Kabupaten</label>
                                    <input class="form-control" type="text" name="id_kabupaten placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kecamatan</label>
                                    <input class="form-control" type="text" name="id_kecamatan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kelurahan</label>
                                    <input class="form-control" type="text" name="id_kelurahan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Telepon / No Handphone</label>
                                    <input class="form-control" type="text" name="telepon" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">E-Mail</label>
                                    <input class="form-control" type="text" name="email" placeholder="">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Golongan dan Status Saat Masuk</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Golongan</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Status</label>
                                    <input class="form-control" type="text" name="kd_status" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jenis Tenaga</label>
                                    <input class="form-control" type="text" name="kd_tenaga" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">TMT</label>
                                    <input class="form-control" type="date" name="tmt" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                                    <input class="form-control" type="text" name="keterangan" placeholder="">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Jabatan Saat Masuk</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jenis Jabatan</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Detail Jabatan</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jabatan</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Pendidikan Saat Masuk</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Strata Pendidikan</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kategori Pendidikan</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jenis Pendidikan</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Program Studi</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jurusan</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Penempatan Saat Masuk</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Satuan Organisasi</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Unit Organisasi</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Unit Kerja</label>
                                    <input class="form-control" type="text" name="kd_golongan" placeholder="">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm ms-auto">Submit</button>
                    </div>
                </div>
            </div>         
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
