@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - Pengaduan')
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">Detail Pengaduan</h1>
      <hr>
    </div>
    </div>
    <div class="profile-main" align="center">
        <img src="{{url('images/'.$data->foto)}}" alt="Foto" width="100">
        <br>
        <h3 class="name">{{ $data->nama }}</h3>
    </div>
        <table class="table table-striped">
            <tr>
                <th>Nomor Pengaduan</th>
                <td>{{ $data->id_pengaduan }}</td>
            </tr>
            <tr>
                <th>Tanggal Pengaduan</th>
                <td>{{ $data->tgl_pengaduan }}</td>
            </tr>
            <tr>
                <th>Nomor Pengadu</th>
                <td>{{ $data->nik }}</td>
            </tr>
            <tr>
                <th>Tanggal Tanggapan</th>
                <td>{{ $data->tgl_tanggapan }}</td>
            </tr>
            <tr>
                <th>Tanggapan</th>
                <td>{{ $data->tanggapan }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $data->status }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/pengaduan" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">Kembali</a></td>
                    </tr>
  </section>
@endsection