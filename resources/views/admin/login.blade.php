<!DOCTYPE html>
<html>
	<head>
	  	<title>Login | Admin </title>
	  
	 	<link rel="stylesheet" type="text/css" href="{{asset('logpage/style.css')}}">

	 	<!-- Sweet Alert -->
	    <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
	    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">
	    
	    <!-- Icon -->
  		<link rel="icon" type="image/png" href="{!! asset('assets/images/icon/icon_admin.png') !!}">

	</head>
	<body>

		<div class="login-box">
			<img src="{{URL::to('logpage/avatar.png')}}" class="avatar" >

			<h1>Login Here</h1>

			@if($errors->count() > 0)
				<div class="alert alert-danger" style="display: none;" id="ERROR_COPY">
					@foreach ($errors->all() as $error)
						{{ $error }} <br>
					@endforeach
				</div>
			@endif
			<br>
			<form action="login_check" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<p>Username</p>
				<input type="text" name="username" placeholder="Masukkan Username">	
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<br>
				<input type="submit" name="submit" value="Login" style="float: unset; width: 100%;">
				<br>
			</form>
		</div>

		<script src="{!! asset('assets/vendor/jquery/jquery.min.js') !!}"></script>
    	<script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

		<script>
			var has_errors = {{ $errors->count() > 0 ? 'true' : 'false' }};

			if (has_errors) {
				swal({
				  title: 'Login Gagal!',
				  type: 'error',
				  html: jQuery("#ERROR_COPY").html(),
				  showCloseButton: true,
				});
			} 

		</script>

	</body>
</html>