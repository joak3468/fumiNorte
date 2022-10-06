<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Fumigaciones Norte</title>
    <meta name="description" content="Somos una empresa que brinda servicios especializados en control, tratamiento y prevención de plagas. Contribuyendo a la higiene y cuidado del medio ambiente. Nuestros productos son de los principales laboratorios en el rubro de sanidad ambiental, tales como Bayer, Gleba, Syngenta, Chemotecnica. Nuestros productos son de baja toxicidad y mínimo impacto ambiental. Están autorizados por el Ministerio de Salud de la Nación y por la Administración nacional de medicamentos, alimentos y tecnología (ANMAT).">
    <meta content="Fumigacion,FumigacionesNorte,Fumigacion del Norte, Desratizacion, desinsectación, Palomas,fumigacion, Cucarachas, Hormigas,Presupuesto online,presupuesto online,fumigacion, Ratas, Roedores, Limpieza, Limpieza General, Fumigacion Capital Federal, Fumigacion Provincia, Control de plagas, Arañas" name="keywords">
    <link href=""{{asset('asset/img/cruz.png')}}" rel="icon">
    <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('asset/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
</head>

<body>
	<div id='page-content'>
		<header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <a class="navbar-brand" href="#">Inicio</a>
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Facturas <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Agenda</a>
                    </li>
                  </ul>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-danger">
                        {{ __('Log Out') }}
                    </button>
                </form>
                </div>
              </nav>
		</header>
		<div>
			@yield('content')
		</div>
		<footer id="footer" class="section-bg">

		</footer>
	</div>

    <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('asset/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('asset/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('asset/vendor/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('asset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('asset/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>

</body>
</html>