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
<form>
	<p>Username</p>
	<input type="text" name="username" placeholder="Masukkan Username">
	<p>Password</p>
	<input type="password" name="password" placeholder="Enter Password">
	<input type="submit" name="submit" value="Login">
	<a href="#">Forget Password</a>

</form>

</div>

</body>
</html>