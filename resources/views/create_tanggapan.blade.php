@extends('template_admin.template_admin')
@section('title', '[Pengaduan Masyarakat] - Tanggapan [Add]')
@section('container')
<head>
<link rel="stylesheet" type="text/css" href="css/pengaduan.css">
</head>
<br>
			@if(Session::get('alert_message'))	
                <div class="alert alert-danger">
                <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
<div class="row">
<div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4">
                <div class="card-body">
                    <div class="container">
                    <form role="form" method="post" action="{{ url('/tanggapan/store') }} " enctype="multimedia/form-data">
                        {{ csrf_field() }}
                            <div class="controls">
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="id_pengaduan">Nomor Pengaduan<span>*</span></label> <input id="id_pengaduan" type="text" name="id_pengaduan" class="form-control" required="required" value="{{$data->id_pengaduan}}"> </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="tgl_tanggapan">Tanggal Tanggapan <span>*</span></label> <input id="tgl_tanggapan" type="date" name="tgl_tanggapan" class="form-control" required="required"> </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="tanggapan">Isi Tanggapan <span>*</span></label> <textarea id="tanggapan" name="tanggapan" class="form-control" placeholder="Tuliskan tanggapan Anda." rows="4" required="required" data-error="Tolong, tuliskan tanggapan Anda."></textarea> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Send Message"> </div>
                                </div>
                            </div>
                        </form>
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


