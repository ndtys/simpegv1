@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Data Pegawai'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Pegawai</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                            NIP</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Nama Pegawai</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                            Status Pegawai</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                            Jabatan</th>
                                        <th class="text-secondary opacity-10"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
