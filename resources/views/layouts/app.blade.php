<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Login</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Title</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/">Inicio</a></li>					
					<li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
					@auth					
						<li><a href="#">{{ auth()->user()->name }}</a></li>		
					@endauth			
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="container">
	
		@if(session()->has('flash'))
			<div class="alert alert-info">{{ session('flash') }}</div>
		@endif
		@yield('content')
	</div>	
</body>
</html>