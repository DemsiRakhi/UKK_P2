@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - Tanggapan')
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">Detail Tanggapan</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>Nomor Tanggapan</th>
                <td>{{ $datas->id_tanggapan }}</td>
            </tr>
            <tr>
                <th>Nomor Pengaduan</th>
                <td>{{ $datas->id_pengaduan }}</td>
            </tr>
            <tr>
                <th>Tanggal Tanggapan</th>
                <td>{{ $datas->tgl_tanggapan }}</td>
            </tr>
            <tr>
                <th>Tanggapan</th>
                <td>{{ $datas->tanggapan }}</td>
            </tr>
            <tr>
                <th>Nomor Petugas</th>
                <td>{{ $datas->nama_petugas }} [{{$datas->id_petugas}}]</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/tanggapan" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">Kembali</a></td>
                    </tr>
  </section>
@endsection