<!-- Stored in resources/views/layouts/app.blade.php -->
<!DOCTYPE HTML>

<html>
    <head>
        <title>ABCDE - @yield('title')</title>
		@yield('css')
    </head>
    <body>
	random apapun	
        <div class="container">
            @yield('content')
        </div>
    </body>
	jquery
	bootstrap
	@yield('js')
</html>