@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - Dashboard')
@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Pengaduan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pengaduan1}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Tanggapan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tanggapan1}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                    <div class="col">
                        <div class="card shadow xl-14">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Welcome</h6>
                                </div>
                                <div class="card-body">
                                @if(Session::get('level')=='admin')
                                    <p>Selamat Datang di Admin Page</p>
                                @else
                                    <p>Selamat Datang di Petugas Page</p>
                                @endif
                                </div>
                            </div>
                        </div> 
                    </div>

                </div>

            

@endsection