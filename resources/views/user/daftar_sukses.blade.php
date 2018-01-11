<!DOCTYPE html>
<html>
<head>
  <title>Daftar | Page </title>

  <link rel="stylesheet" type="text/css" href="{{asset('logpage/style2.css')}}">
  <link href="{!! asset('assets/font-awesome/css/font-awesome.css') !!}" rel="stylesheet">

</head>
<body>

<div class="login-box" style="height: auto;">
	<img src="{{URL::to('logpage/avatar.png')}}" class="avatar" >

	<div class="service-item" style="box-sizing: border-box; text-align: center!important;">
		<span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x" style="color: #39dc79"></i>
            <i class="fa fa-check fa-stack-1x text-primary"></i>
        </span>
        <h2>
            Daftar Sukses !
        </h2>
        <a href="/login">- Login -</a>
    </div>

</div>

</body>
</html>
