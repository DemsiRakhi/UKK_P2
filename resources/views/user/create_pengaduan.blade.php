@extends('template_user.template')
@section('title', '[Pengaduan Masyarakat] - Home')
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
                    <form role="form" method="post" action="{{ url('/pengaduan/store') }} " enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="tgl_pengaduan">Tanggal Pengaduan <span>*</span></label> <input id="tgl_pengaduan" type="date" name="tgl_pengaduan" class="form-control" required="required"> </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group"> <label for="foto">Foto <span>*</span></label> <input id="foto" type="file" name="foto" class="form-control" required="required"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="isi_laporan">Isi Laporan <span>*</span></label> <textarea id="isi_laporan" name="isi_laporan" class="form-control" placeholder="Tuliskan Keluh Kesah Anda." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Send Message"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div>
        </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
    </script>

@endsection