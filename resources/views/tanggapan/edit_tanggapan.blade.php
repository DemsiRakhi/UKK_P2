@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - Tanggapan [Add]')
@section('container')
<head>
<link rel="stylesheet" type="text/css" href="css/pengaduan.css">
</head>
<br>
<div class="row">
<div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4">
                <div class="card-body">
                    <div class="container">
                    @foreach($tanggapan as $datas)
                    <form role="form" method="post" action="{{route('editTanggapan',$datas->id_tanggapan)}}" enctype="multimedia/form-data">
                        {{ csrf_field() }}
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="id_pengaduan">Nomor Pengaduan <span>*</span></label> 
                                        <input type="text" name="id_pengaduan" class="form-control" value="{{old('id_pengaduan') ?? $datas->id_pengaduan}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="tgl_tanggapan">Tanggal Tanggapan <span>*</span></label> 
                                        <input id="tgl_tanggapan" type="date" name="tgl_tanggapan" class="form-control" value="{{old('tgl_tanggapan') ?? $datas->tgl_tanggapan}}"required="required"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="id_petugas">Nomor Petugas <span>*</span></label> 
                                        <input type="text" name="id_petugas" class="form-control" value="{{old('id_petugas') ?? $datas->id_petugas}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="tanggapan">Isi Tanggapan <span>*</span></label> <textarea id="tanggapan" name="tanggapan" class="form-control"  rows="4" required="required">{{old('tanggapan') ?? $datas->tanggapan}}</textarea> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Update"> </div>
                                    <div class="col-md-6"> <a href="/pengaduan" class="btn btn-danger pt-2 btn-block ">Kembali</a><hr> </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
    </script>

@endsection