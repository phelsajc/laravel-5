	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	<!--	<link rel="stylesheet" type="text/css" href="/../../gcc-assets-module/public/css/style.css"> -->

	</head>
	<body>
		@yield('content')
	    @yield('pass')

	    <ul>
	    @yield('songs')

	    </ul>

		@yield('footer')
	</body>
	</html>