@extends('web.base')

@section('content')
<section id="hero" class="">
    <div class="container d-flex h-100" id="home">
        <div class="row justify-content-center align-self-center ">
            <div class="col-md-6 intro-info order-md-first order-last ">
                <h1>
                    CONTROL INTEGRADO DE PLAGAS.
                </h1>
                <h6>Servicios para el control y prevención de plagas</h6>
                <div>
                    <a href="{{ route( 'form' ) }}" class="btn-get-started scrollto"  style="font-family:'Franklin Gothic Medium';">Presupuesto Online</a>
                </div>
            </div>
            <div class="col-md-6 intro-img order-md-last order-first">
                <img src="{{asset('asset/img/logo.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<main id="main">
    <section id="about" class="about">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{asset('asset/img/port.jpg')}}" />
                    </div>
                    <br />
                    <div class="about-img">
                        <img src="{{asset('asset/img/mercado-pago.jpg')}}" alt="Alternate Text" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about-content">
                        <h2>Nosotros</h2>
                        <h3>Somos una empresa que brinda servicios especializados en control, tratamiento y prevención de plagas. </h3>
                        <p>
                            Contribuyendo a la higiene y cuidado del medio ambiente.
                            Nuestros productos son de los principales laboratorios en el rubro de sanidad ambiental, tales como Bayer, Gleba, Syngenta, Chemotecnica.
                            Nuestros productos son de baja toxicidad y mínimo impacto ambiental. Están autorizados por el Ministerio de Salud de la Nación y por la Administración nacional de medicamentos, alimentos y tecnología (ANMAT).

                        </p>
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> CERTIFADO</li>
                            <li><i class="ion-android-checkmark-circle"></i> FACTURA</li>

                        </ul>
                        <h4 style="color:black">Nuestros Clientes</h4>
                        <ul>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Empresas y oficinas</i></li>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Industrias, plantas y depósitos </i></li>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Establecimientos educativos</i></li>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Establecimientos de salud</i></li>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Espacios públicos</i></li>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Comercios</i></li>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Consorcios</i></li>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Residencias particulares</i></li>
                            <li><i class="ion-android-checkbox" style="color:dimgray; font-family: Arial;"> Residencia para mayores</i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="services" class="services section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Servicios</h3>
                <p>Control, prevención de plagas y Limpieza en general.</p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">

                        <img src="{{asset('asset/img/insec/cucaracha.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">CUCARACHAS</h4>
                        <p class="description">Sus cuerpos están llenos de pequeñas fisuras y pelos que son perfectos para transportar todo tipo de microorganismos</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="{{asset('asset/img/insec/mosquito.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">MOSQUITOS</h4>
                        <p class="description">Los virus causan la mayoría de las enfermedades que transmiten los mosquitos. La malaria está causada por un parásito</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="{{asset('asset/img/insec/rata.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">ROEDORES</h4>
                        <p class="description">Los roedores son portadores de una amplia variedad de organismos que causan enfermedades, incluyendo muchas especies de bacterias, virus, protozoos y helmintos</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="{{asset('asset/img/insec/pulga.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">PULGAS</h4>
                        <p class="description">Las pulgas son unos molestos parásitos para nuestras mascotas y son muy difíciles de erradicar del medio ambiente.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="{{asset('asset/img/insec/araña.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">ARAÑAS</h4>
                        <p class="description">Siendo cazadoras solitarias, tienden a considerar una presa cualquier cosa que se mueva y tenga el tamaño apropiado.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="{{asset('asset/img/insec/alacran.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">ALACRANES</h4>
                        <p class="description">Las picaduras de alacranes son eventos potencialmente graves y letales</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="{{asset('asset/img/insec/avispa.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">AVISPAS</h4>
                        <p class="description">Con la picadura estos insectos inoculan veneno en la piel, sustancias de naturaleza variada</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="{{asset('asset/img/insec/paloma.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">PALOMAS</h4>
                        <p class="description">La presencia incontrolada de palomas y otras aves en entornos urbanos pueden ser una fuente de enfermedades generalmente producidas por la acumulación de excrementos</p>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="{{asset('asset/img/insec/hormiga.jpeg')}}" class="rounded-circle w-25 p-3" alt="">
                        <h4 class="title">HORMIGAS</h4>
                        <p class="description">El principal peligro sanitario de esta plaga se da en los gérmenes que transportan en sus patas y que transmiten a los alimentos sobre los que caminan</p>
                    </div>
                </div>

            </div>

        </div>
    </section>



    <section id="plagas" class="pest-control section-bg ">
        <div class="container">

            <header class="section-header">
                <h3>Control de Plagas Urbanas</h3>
                <p>Plagas más comunes: Cucarachas, Roedores, Hormigas, Moscas, Moscardones, Mosquitos, Pulgas, Escorpiones, Chinche de cama, Avispas. </p>
            </header>

            <div class="row mtn-30">
                <div class="col-6 col-sm-4 col-lg-auto flex-grow-1">
                    <!-- pest single start -->
                    <div class="pest-item text-center mt-30">
                        <div class="pest-icon">

                            <img src="{{asset('asset/img/899img.webp')}}" alt="pest thumb">
                        </div>
                        <h6 class="pest-title">FUMIGACIÓN</h6>
                    </div>
                    <!-- pest single end -->
                </div>

                <div class="col-6 col-sm-4 col-lg-auto flex-grow-1">
                    <!-- pest single start -->
                    <div class="pest-item text-center mt-30">
                        <div class="pest-icon">
                            <img src="{{asset('asset/img/insec/pulverizacion.webp')}}" alt="pest thumb">
                        </div>
                        <h6 class="pest-title">PULVERIZACIÓN</h6>
                    </div>
                    <!-- pest single end -->
                </div>

                <div class="col-6 col-sm-4 col-lg-auto flex-grow-1">
                    <!-- pest single start -->
                    <div class="pest-item text-center mt-30">
                        <div class="pest-icon">
                            <img src="{{asset('asset/img/insec/cebado.webp')}}" alt="pest thumb">
                        </div>
                        <h6 class="pest-title">ESTACIONES <br> DE CEBADO</h6>
                    </div>
                    <!-- pest single end -->
                </div>

                <div class="col-6 col-sm-4 col-lg-auto flex-grow-1">
                    <!-- pest single start -->
                    <div class="pest-item text-center mt-30">
                        <div class="pest-icon">
                            <img src="{{asset('asset/img/insec/nebulizacion.webp')}}" alt="pest thumb">
                        </div>
                        <h6 class="pest-title">NEBULIZACIONES</h6>
                    </div>
                    <!-- pest single end -->
                </div>
                <div class="col-6 col-sm-4 col-lg-auto flex-grow-1">
                    <!-- pest single start -->
                    <div class="pest-item text-center mt-30">
                        <div class="pest-icon">
                            <img src="{{asset('asset/img/insec/desratizacion.webp')}}" alt="pest thumb">
                        </div>
                        <h6 class="pest-title">DESRATIZACIONES</h6>
                    </div>
                    <!-- pest single end -->
                </div>
                <div class="col-6 col-sm-4 col-lg-auto flex-grow-1">
                    <!-- pest single start -->
                    <div class="pest-item text-center mt-30">
                        <div class="pest-icon">
                            <img src="{{asset('asset/img/insec/desinsectacion.webp')}}" alt="pest thumb">
                        </div>
                        <h6 class="pest-title">DESINSECTACIONES</h6>
                    </div>
                    <!-- pest single end -->
                </div>

            </div>
        </div>
    </section>
    <section id="proveedores" class="team" style="text-decoration-line:underline; margin-top:40px;">
        <div class="container">
            <div class="section-header">
                <h3>Proveedores</h3>
                
            </div>

            <div class="row">
                
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="{{asset('asset/img/proveedores/uno.jpg')}}" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="{{asset('asset/img/proveedores/dos.jpg')}}" class="img-fluid" alt="">
                        
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="{{asset('asset/img/proveedores/tres.jpg')}}" class="img-fluid" alt="">
                        
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="{{asset('asset/img/proveedores/cuatro.jpg')}}" class="img-fluid" alt="">
                        
                    </div>
                </div>

            </div>

        </div>
    </section>



    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Galeria</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todas</li>

                        <li data-filter=".filter-card">Interior</li>
                        <li data-filter=".filter-web">Exterior</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/uno.jpeg')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/dos.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/new2.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/cuatro.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/cinco.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/seis.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/new1.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/nueve.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-active">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/ocho.jpeg')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-active">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/diez.jpeg')}}"    class="img-fluid" alt="">

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/once.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/veinte.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/new3.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('asset/img/galery/quince.jpeg')}}" class="img-fluid" alt="">

                    </div>
                </div>
            </div>


        </div>
    </section>


    <section id="faq" class="faq wow fadeInUp">
        <div class="container">
            <header class="section-header">
                <h3>Preguntas Frecuentes</h3>

            </header>

            <ul id="faq-list" class="wow fadeInUp">
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq1">¿Hay que retirarse mientras se está fumigando? <i class="ion-android-remove"></i></a>
                    <div id="faq1" class="collapse" data-parent="#faq-list">
                        <p>
                            Se recomienda después de fumigar retirarse del área tratada aproximadamente entre una a dos horas, luego se podrá ingresar ventilando los ambientes.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq2" class="collapsed">¿Si tengo mascota se puede fumigar? <i class="ion-android-remove"></i></a>
                    <div id="faq2" class="collapse" data-parent="#faq-list">
                        <p>
                            La aplicación de los productos se realiza en lugares puntuales lejos del alcance de las mascotas.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq3" class="collapsed">¿Tengo un bebe, puedo fumigar? <i class="ion-android-remove"></i></a>
                    <div id="faq3" class="collapse" data-parent="#faq-list">
                        <p>
                            Nuestro personal toma todas las medidas de precaución para aplicar los productos fuera del alcance de los niños.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq4" class="collapsed">¿Los productos que se utilizan son tóxicos? <i class="ion-android-remove"></i></a>
                    <div id="faq4" class="collapse" data-parent="#faq-list">
                        <p>
                            Los productos son de baja toxicidad y en las dosis que se aplica no afecta la salud de las personas ni de las mascotas.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq5" class="collapsed">¿Posee algún costo la visita para el presupuesto? <i class="ion-android-remove"></i></a>
                    <div id="faq5" class="collapse" data-parent="#faq-list">
                        <p>
                            La visita y el asesoramiento no posee ningún costo, solo se pasan presupuesto con visita previa.    
                        </p>
                    </div>
                </li>



            </ul>

        </div>
    </section>


</main>



@if(isset($success_send))
<div class="modal fade" id="success_send" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mensaje enviado correctamente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            A la brevedad el nuestro equipo le contestará su consulta - presupuesto.
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
    </div>
</div>
@endif
  
@endsection
@section('content_script')
@if(isset($success_send))
<script>
    $('#success_send').modal('show');
</script>
@endif

@endsection