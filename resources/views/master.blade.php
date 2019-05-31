<html>
<head>
	<title>Laravel Blog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"	 integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
</style>
<body style="background-color:#f7f7f7;">
	
	<nav class="navbar navbar-expand-lg navbar-dark p-3" style="background: #00B4DB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
	<div class="container">
	<a class="navbar-brand" href="/">Laravel Blog</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		@if(!Session::get('login'))
			<li class="nav-item active">
				<a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
			</li>

		@endif
		@if(Session::get('login'))
		<li class="nav-item active">
			<a href="/admin" class="nav-link">Beranda</a>
		</li>
		<li class="nav-item">
			<a href="/admin/blog" class="nav-link">Blog</a>
		</li>
		@endif	
		</ul>
		<form class="form-inline my-2 my-lg-0">
			@if(!Session::get('login'))
				<a class="btn btn-primary" href="/login">Login</a> <a class="btn btn-danger" href="/register"> Register</a>
			@endif
			@if(Session::get("login"))
				<a href="/logout" class="btn btn-danger">Keluar</a>
			@endif			
		</form>
	</div>
	</div>
	</nav>

	<div class="container" >
		<h1 class="mt-4 mb-4">@yield('judul')</h1>
		<div class="row">@yield('konten')</div>
	</div>
	
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>