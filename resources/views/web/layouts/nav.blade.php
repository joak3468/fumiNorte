@if($ruta == 'home')
<div id="topbar">
    <div class="container" id="title">
        <div class="social-links">
            <p>
                <strong>Tel:</strong> <a href="tel:">011 4702 7271</a> / <a href="tel:">15 5563 7084</a>
                <a target="_blank" href="https://www.facebook.com/Fumigaciones-Norte-1815119762033122/" class="facebook"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/fumigaciones_norte/" class="instagram"><i class="fa fa-instagram"></i></a>
            </p>
        </div>
    </div>
</div>
@endif
<!--si el presupuesto online es apretado, hide sino no, hacerlo con js Y DETECTAR QUE SEA MOVIL-->
<div class="container" >
    <div class="logo float-left text-success"  style="position: static">
        <h3 class="text-success"><img src="{{asset('asset/img/cruz.png')}}" alt="Alternate Text" /><a href="{{route('home')}}"><span  style="font-family:'Franklin Gothic Medium'; color:#28a745">Fumigaciones Norte</span></a></h3>
    </div>
    <nav class="main-nav float-right d-none block d-lg-block">
        <ul>
            <li class="{{$ruta == 'home' ? 'active' : ''}}"><a href="{{$ruta == 'home' ? '' : route('home')}}#title">Inicio</a></li>
            <li><a href="{{$ruta == 'home' ? '' : route('home')}}#about">Nosotros</a></li>
            <li><a href="{{$ruta == 'home' ? '' : route('home')}}#services">Servicios</a></li>
            <li><a href="{{$ruta == 'home' ? '' : route('home')}}#proveedores">Proveedores</a></li>
            <li><a href="{{$ruta == 'home' ? '' : route('home')}}#portfolio">Galeria</a></li>
            <li><a href="{{$ruta == 'home' ? '' : route('home')}}#contacto" class="font-weight-bold">Contacto</a></li>
            <li class="{{$ruta == 'form' ? 'active' : ''}}" ><a href="{{ route( 'form' ) }}" >Presupuesto online</a></li>
        </ul>
    </nav>
</div>