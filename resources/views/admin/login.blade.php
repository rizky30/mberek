<!DOCTYPE html>
<html>
<head>
  <title>Login | Page </title>
  
 <link rel="stylesheet" type="text/css" href="{{asset('logpage/style.css')}}">
</head>
<body>

<div class="login-box">
<img src="{{URL::to('logpage/avatar.png')}}" class="avatar" >

<h1>Login Here</h1>

<div class="alert alert-danger">
	@if($errors->has('username')) {{$errors->first('username')}}@endif {{-- untuk validasi require --}}
	<br>
	@if($errors->has('password')) {{$errors->first('password')}}@endif {{-- untuk validasi require --}}
</div>

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

</body>
</html>