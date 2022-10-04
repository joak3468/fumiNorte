<!DOCTYPE html>
<html lang="en">
<head>
	@include('web.layouts.head')
</head>

<body>
	<div id='page-content'>
		<header id="header" @if($ruta == 'form') style="position: static" @endif>
			@include('web.layouts.nav')
		</header>
		<div>
			@yield('content')
		</div>
		<footer id="footer" class="section-bg">
			@include('web.layouts.footer')
		</footer>
            <a href="https://wa.link/r1ff5h" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>
	</div>
	@include('web.layouts.scripts')
	@yield('content_script')
</body>
</html>