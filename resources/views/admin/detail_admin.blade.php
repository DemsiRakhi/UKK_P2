@extends('template_admin.template_admin')
@section('title', '[Pengeluhan Masyarakat] - Admin')
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">Detail Admin / Petugas</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>Nomor Petugas</th>
                <td>{{ $datas->id_petugas }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $datas->nama_petugas}}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ $datas->username }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ $datas->password }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ $datas->telp }}</td>
            </tr>

            <tr>
                <th>Status</th>
                <td>{{ $datas->level }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/adminpage" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">KEMBALI</a></td>
                    </tr>
  </section>
@endsection