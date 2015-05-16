	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	<!--	<link rel="stylesheet" type="text/css" href="/../../gcc-assets-module/public/css/style.css"> -->
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
		@yield('content')
	    @yield('pass')

	    <ul>
	    @yield('songs')

	    </ul>

		@yield('footer')
		</div>
	</body>
	</html>