@extends('NuevoLayout')
@section('Content')
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('Home/ImagenesPro-Gym/Slider1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1 style="color:#00c3ffb9">Planes adecuados a ti</h1>
                                <p style="font-size: 30px; color:#ffffff; text-aling:justify">Nuestro personal esta
                                    completamnte capacitado y disponible para tu bienestar.</p>
                                <div class="button">
                                    <a href="{{ route('QuienesSomos') }}" class="btn">Conócenos</a>
                                    <a href="{{ route('home') }}" class="btn primary">Vinculate con nosotros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('Home/ImagenesPro-Gym/Slider2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1 style="color:#5dd438">Kobe Bryant</h1>
                                <p style="font-size: 30px; color:#000000; text-aling:justify">Si tienes miedo de fallar,
                                    probablemente falles.</p>
                                <div class="button">
                                    <a href="{{ route('QuienesSomos') }}" class="btn">Conócenos</a>
                                    <a href="https://boticariagarcia.com/" class="btn primary">Aprende más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('Home/ImagenesPro-Gym/Slider3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1 style="color:#45E8FF">Carl Bard</h1>
                                <p style="font-size: 30px; color:#ffffff; text-aling:justify">Aunque nadie puede volver
                                    atrás y hacer un nuevo comienzo,
                                    cualquiera puede comenzar a partir de ahora y crear un nuevo final.</p>
                                <div class="button">
                                    <a href="{{ route('QuienesSomos') }}" class="btn">Conócenos</a>
                                    <a href="https://boticariagarcia.com/" class="btn primary">Aprende más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Single Slider -->
    <!-- Start Call to action -->
    <section class="call-action overlay" style="background-color: rgb(255, 255, 255)">
        <div class="container">
			<br>
            <div class="card-columns">
                
            @foreach ($productos as $producto)
            
                
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img class="card-img-top" src="{{ asset($producto->foto) }}" alt="" width="50%" height="50%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center">{{ $producto->nombre }}</h5>
                            <p class="card-text" style="text-align: justify">{{ $producto->descripcion }}</p>
                            <h3 class="card-text" style="text-align: center"><i>{{ $producto->valor }}</i></h3>
                            <div style="display: flex; align-items: center; justify-content: center;"><a href="#" class="btn btn-success">Comprar</a></div>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!--/ End Call to action -->

    <!-- Pricing Table -->
    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Pregunta por nuestros planes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-whistle-alt"></i>
                            </div>
                            <h4 class="title">Normal</h4>
                            <div class="price">
                                <p class="amount">$60000<span>/ Mes</span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Acceso a maquinas</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso a clases de zumba</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Acceso a bañeras</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Acceso a clases de yoga</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Asistencia personalizada</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="{{ route('home') }}">Inscribete</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-water-bottle"></i>
                            </div>
                            <h4 class="title">Completo</h4>
                            <div class="price">
                                <p class="amount">$90000<span>/ Mes</span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Acceso a maquinas</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso a clases de zumba</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso a bañeras</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso a clases de yoga</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Asistencia personalizada</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="{{ route('home') }}">Inscribete</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-meetme"></i>
                            </div>
                            <h4 class="title">Completo + Trainer</h4>
                            <div class="price">
                                <p class="amount">$160000<span>/ Mes</span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Acceso a maquinas</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso a clases de zumba</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso a bañeras</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso a clases de yoga</li>
                            <li><i class="icofont icofont-ui-check"></i>Asistencia personalizada</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="{{ route('home') }}">Inscribete</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->
    <div>
        <section class="call-action overlay" style="background-color: rgb(255, 94, 0)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h2>Deseas contactarnos, no lo dudes, solo hazlo #TuPuedes</h2>
                            <p style="font-size: 20px">No pierdas más tiempo, es hora de iniciar una nueva vida</p>
                            <div class="button">
                                <a href="https://api.whatsapp.com/send?phone=573134347547&text=Hola%2C%20Soy%20Diana%20de%20ProGym%20en%20que%20te%20podemos%20colaborar"
                                    class="btn">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Call to action -->
    </div>
@endsection
