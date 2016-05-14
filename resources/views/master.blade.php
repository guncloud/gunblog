<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title or 'Gunblog' }}</title>

	<link href="{{ asset('gentalella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('gentalella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<body class="nav-md">
	    <div class="container body">
	      	<div class="main_container">
	      		@include('partials.top')

	      		@yield('content')

	      		<footer>
	      		  <div class="pull-right">
	      		    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
	      		  </div>
	      		  <div class="clearfix"></div>
	      		</footer>
	      	</div>
      	</div>
  	</body>
	
</body>
</html>