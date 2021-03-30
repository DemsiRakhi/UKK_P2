@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - User')
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">Detail User</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>Nomor Induk</th>
                <td>{{ $datas->nik }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $datas->nama }}</td>
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
        </table>
        <tr>
                    <td><a href="/userpage" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">KEMBALI</a></td>
                    </tr>
  </section>
@endsection