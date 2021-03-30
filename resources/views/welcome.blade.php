@extends('template_user.template')
@section('title', '[Pengaduan Masyarakat] - Home')
@section('container')
<head>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<div class="section">
<div class="tm-container-inner-2 tm-info-section">
				<div class="row">
					<!-- Welcome -->
					<div class="col-12 tm-faq">
						<h2 class="text-center tm-section-title">Web Pengaduan Masyarakat</h2>
						<p class="text-center">Selamat Datang di Web Pengaduan Masyarakat</p>
						@if(Session('cek_login_masyarakat') == true)
						<div class="card shadow mb-4">
								<div class="card-header py-3">
										<h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
								</div>
								<div class="card-body">
										<div class="table-responsive">
										<div class="panel-body">
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
																		<th>Status</th>
																</tr>
														</thead>
														@php $no=0; @endphp
														@foreach($datas as $data)
														@php $no++; @endphp
														<tbody>
																<tr>
																		<td>{{$no}}</td>
																		<td>{{$data->tgl_pengaduan}}</td>
																		<td>{{$data->nama}}</td>
																		<td>{{$data->isi_laporan}}</td>
																		<td><img src="{{url('/images/'.$data->foto)}}"  style="max-width: 40px"></td>
																		<td>{{$data->status}}</td>
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
						@endif
					</div>
				</div>
			</div>
            <script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script>
</div>


@endsection