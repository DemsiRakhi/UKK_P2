@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - Pengaduan')
@section('container')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
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
            <a href="/pengaduan/cetak_pdf_pengaduan" class="btn btn-primary btn-sm btn-center-block" target="_blank">Cetak Laporan</a>
            <br>
            </div>
            @endif
            <div class="row">
                <div class="col-sm-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <br>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Nama Pengadu</th>
                            <th>Isi Laporan</th>
                            <th>Foto</th>
                            <th>Tanggal Tanggapan</th>
                            <th>Tanggapan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php $no=0; @endphp
                    @foreach($data_tanggapan as $data)
                    @php $no++; @endphp
                    <tbody>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->tgl_pengaduan}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->isi_laporan}}</td>
                            <td><img src="{{url('/images/'.$data->foto)}}"  style="max-width: 40px"></td>
                            <td>{{$data->tgl_tanggapan}}</td>
                            <td>{{$data->tanggapan}}</td>
                            <td>{{$data->status}}</td>
                            <td>
                            <a href="{{url('/tanggapan/create/' . $data->id_pengaduan)}}" class="btn btn-success btn-sm btn-center-block">Tanggapan</a> 
                            <a href="{{url('/pengaduan/edit/'. $data->id_pengaduan)}}" class="btn btn-warning btn-sm btn-center-block">Ganti Status</a>
                            <a href="{{url('/tanggapan/edit/'. $data->id_tanggapan)}}" class="btn btn-info btn-sm btn-center-block">Edit Tanggapan</a>
                            <a href="/pengaduan/hapus/{{ $data->id_pengaduan }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
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