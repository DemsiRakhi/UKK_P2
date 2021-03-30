@extends('template_petugas.template')
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