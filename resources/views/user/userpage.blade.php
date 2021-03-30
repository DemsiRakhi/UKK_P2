@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - User')
@section('container')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <div class="panel-body">
            @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <div class="col-sm-12 col-md-6">
            </div>
            <div class="row">
                <div class="col-sm-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Telephone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php $no=0; @endphp
                    @foreach($datas as $data)
                    @php $no++; @endphp
                    <tbody>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->password}}</td>
                            <td>{{$data->telp}}</td>
                            <td>
                            <a href="{{url('/userpage/detail/'.$data->nik)}}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/userpage/hapus/{{ $data->nik }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
            </div>
            </div>
            </div>
    </div>
    </div>

@stop