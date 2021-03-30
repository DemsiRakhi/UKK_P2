<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="{{url('tmp/css/templatemo-style.css')}}" rel="stylesheet" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="description" content="Template">
  	<meta name="author" content="Muhammad Zidan Rakhi Ismed">

	<!-- --> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body> 
			@if(Session::get('alert_message'))	
                <div class="alert alert-danger">
                <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif

	<div class="container">
		<div class="placeholder">
			<div class="parallax-window" style="background-color:grey;">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<div class="tm-site-text-box">
								<h3>Pengaduan Masyarakat</h3>
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="/" class="tm-nav-link">Home</a></li>
								
								<li class="tm-nav-li"><a href="/create_pengaduan" class="tm-nav-link">Pengaduan</a></li>
								@if(Session::get('cek_login_masyarakat')=='true')
								<li class="tm-nav-li dropdown">
                            			<a class="tm-nav-link dropdown-toggle" href="#" id="userDropdown" role="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                		<span class="mr-2 d-none d-lg-inline text-gray-600 small">User
                                		</span>
                            			</a>
                            	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                	<div class="dropdown-divider"></div>
                                		<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    		<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    		Logout
                                		</a>
                            		</div>
                        		</li>
								@else
								<li class="tm-nav-li"><a href="/login_masyarakat" class="tm-nav-link">Masuk</a> </li>
								@endif
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			@yield('container')
		</div>

		<footer class="tm-footer text-center">
			<p>Muhammad Zidan Rakhi Ismed</p>
		</footer>
		
	</div>

	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Mau Logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{url('logout_masyarakat')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

	<script src="{{url('tmp/js/jquery.min.js')}}"></script>
	<script src="{{url('tmp/js/parallax.min.js')}}"></script>
	
    <!-- Bootstrap core JavaScript-->
    <script src="{{url('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('admin/js/sb-admin-2.min.js')}}"></script>

	
	

</body>

</html>