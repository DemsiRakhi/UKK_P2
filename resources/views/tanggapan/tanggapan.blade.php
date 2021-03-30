@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - Tanggapan')
@section('container')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tanggapan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <div class="panel-body">
            @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif

            @if(Session('level')=='admin')
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length">
                <a href="/tanggapan/cetak_pdf_tanggapan" class="btn btn-primary btn-sm btn-center-block" target="_blank">Cetak Laporan</a>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-sm-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <br>
                        <tr>
                            <th>No</th>
                            <th>Nomor Pengaduan</th>
                            <th>Tanggal Tanggapan</th>
                            <th>Tanggapan</th>
                            <th>Nomor Petugas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php $no=0; @endphp
                    @foreach($datas as $data)
                    @php $no++; @endphp
                    <tbody>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->id_pengaduan}}</td>
                            <td>{{$data->tgl_tanggapan}}</td>
                            <td>{{$data->tanggapan}}</td>
                            <td>{{$data->id_petugas}}</td>
                            <td>
                            <a href="{{url('/tanggapan/detail/'.$data->id_tanggapan)}}" class="btn btn-info btn-sm">Detail</a> |
                            <a href="{{url('/tanggapan/edit/'.$data->id_tanggapan)}}" class="btn btn-success btn-sm">Edit</a> |
                            <a href="/tanggapan/hapus/{{ $data->id_tanggapan }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
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