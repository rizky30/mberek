<!DOCTYPE html>
<html>
<head>
  <title>Login | Page </title>

 <link rel="stylesheet" type="text/css" href="{{asset('logpage/style2.css')}}">
</head>
<body>

<div class="login-box" style="height: 400px;">
<img src="{{URL::to('logpage/avatar.png')}}" class="avatar" >

<h1>Login Here</h1>
<form action="login_check" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<p>Username</p>
	<input type="text" name="username" placeholder="Masukkan Username">
	@if($errors->has('username')) {{$errors->first('username')}}@endif {{-- untuk validasi require --}}
	<p>Password</p>
	<input type="password" name="password" placeholder="Enter Password">
	@if($errors->has('password')) {{$errors->first('password')}}@endif {{-- untuk validasi require --}}
	<a href="#" style="display: block;">Forget Password ?</a>
	<br>
	<input type="submit" name="submit" value="Login" style="float: unset; width: 100%;">
	<br>
	<div style="margin-bottom: 5px; margin-top: 5px">
		Belum memiliki akun? <a href="/daftar">Daftar Disini!</a>
	</div>
	<a href="/home">Kembali ke Home</a>

</form>

</div>

</body>
</html>
