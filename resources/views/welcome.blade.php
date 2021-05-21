<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mapaches @foreach($information as $info)
          {{$info->shortName}}
          @endforeach</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('homes/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('homes/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('homes/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('homes/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('homes/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('homes/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('homes/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Plato - v4.1.0
  * Template URL: https://bootstrapmade.com/plato-responsive-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <div class="wrap">

    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-container" data-aos="fade-up">
        <h1>@foreach($information as $info)
          {{$info->name}}
          @endforeach
          <br>
        </h1>
        <h2>La manera mas rapida de guardar datos</h2>
        <a href="{{ url('login')}}" class="btn-get-started scrollto">Ingresar</a>
      </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

        <div class="nav-link scrollto active">
          <h1 class="text-light"><a href="http://tie.teziutlan.tecnm.mx/tie/login/index.php"><span>Mapaches</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#">Home</a></li>
            <li><a class="nav-link scrollto active" href="#products">Productos</a></li>
            <li><a class="nav-link scrollto active" href="#contact">Contacto</a></li>
            <li><a class="nav-link scrollto active" href="#information">Informacion</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div style="background-image: url(/homes/assets/img/about.jpg)" data-aos="fade-right" class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 pt-4 pt-lg-0 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center text-center" data-aos="fade-left">
              <h2>
                <font color="green">Almacena productos para tu SETUP GAMER</font>
              </h2>
              <p>Da click en el apartado de tu agrado</p>
              <div class="nav-link scrollto active">
                <br>
                <div class="row">
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-face"></i>
                    <h4><a href="#headset">Audifonos</a></h4>
                    <p>
                      <font color="black">Almacena los audifonos mas destacados del anio</font>
                    </p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-key"></i>
                    <h4><a href="#keyboard">Teclados</a></h4>
                    <p>
                      <font color="black">Almacena los teclados mecanicos o de membrana mas destacados del anio</font>
                    </p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-tv"></i>
                    <h4><a href="#tv">Monitores</a></h4>
                    <p>
                      <font color="black">Almacena los monitores con mejor resolucion y mejor tasas de refresco mas destacados del anio</font>
                    </p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-chair"></i>
                    <h4><a href="#chair">Sillas Gamer</a></h4>
                    <p>
                      <font color="black">Almacena las sillas mas comodas de este 20201 mas destacadas del anio</font>
                    </p>
                  </div>
                  <h3 class="text-light text-center"><a href="{{ url('register')}}"><br><span>
                        <font color="teal">Registrate</font>
                      </span></a></h3>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->



    <!-- ======= Testimonials Section ======= -->

    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="homes/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Carlos Franco</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
    </section><!-- End Testimonials Section -->
    <br>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="homes/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Products Section ======= -->
    <!-- ======= Audifonos Section ======= -->
    <section id="products">
      <section id="headset">
        <div class="section-title">
          <h2>
            <font color="black">Audifonos</font>
          </h2>
          <h3><span>Productos</span></h3>
        </div>

        <div class="container">
          <div class="row">

            @forelse($headsets as $headset)
            <!-- renderizar datos -->
            <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
              <div class="card-header">
                <font color="teal">
                  <h3 class="text-secundary text-center"><b>{{ $headset->brand }}</b>
                    <h4 class="text-center">{{ $headset->model }}</h4>
                  </h3>
                </font>
              </div>
              <div class="card-body">
                <p class="card-text">{{ $headset->description }}</p>
                <div class="">
                  <p class="text-muted">Color: <b>{{ $headset->color }}</b></p>
                </div>
                <div class="">
                  <p class="text-muted">Tipo: <b>{{ $headset->type }}</b></p>
                  <br>
                  <img style="width: 280px; height: 450; object-fit: cover; " src="/imagenes/headsets/{{$headset->image}}" alt="{{$headset->brand}}{{$headset->model}}" />
                </div>
                <br>
                <div class="">
                  <p class="text-muted">Comentario: <font color="teal">{{ $headset->comment }}</font>
                  </p>
                </div>
              </div>

              <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-outline-info padding-left mr-2" href="{{ url('login') }}"><i class="fas fa-info">
                  </i><b>
                    <font color="teal">Ver más </font>
                  </b></a>

              </div>

            </div>
            @empty
            <!-- Mensaje por si no encuentra datos -->
            <del>No hay registros en la base de datos</del>
            @endforelse
          </div>
        </div>
      </section>

      <!-- ======= Teclados Section ======= -->

      <section id="keyboard">
        <div class="section-title">
          <h2>
            <font color="black">Teclados</font>
          </h2>
          <h3><span>Productos</span></h3>
        </div>

        <div class="container">
          <div class="row">

            @forelse($keyboards as $keyboard)
            <!-- renderizar datos -->
            <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
              <div class="card-header">
                <font color="teal">
                  <h3 class="text-secundary text-center"><b>{{ $keyboard->brand }}</b>
                    <h4 class="text-center">{{ $keyboard->model }}</h4>
                  </h3>
                </font>
              </div>
              <div class="card-body">
                <p class="card-text">{{$keyboard->description}}</p>
                <div class="">
                  <p class="text-muted">Color: <b>{{ $keyboard->type }}</b></p>
                </div>
                <div class="">
                  <p class="text-muted">RGB:<b>{{$keyboard->rgb}}</b></p>
                  <br>
                  <img style="width: 280px; height: 450; object-fit: cover; " src="/imagenes/keyboards/{{$keyboard->image}}" alt="{{$keyboard->brand}}{{$keyboard->model}}" />
                </div>
                <br>
                <div class="">
                  <p class="text-muted">Comentario: <font color="teal">{{ $keyboard->comment }}</font>
                  </p>
                </div>
              </div>
              <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-outline-info padding-left mr-2" href="{{ url('login') }}"><i class="fas fa-info"></i>
                  <font color="teal"><b> Ver más </b></font>
                </a>
              </div>
            </div>
            @empty
            <!-- Mensaje por si no encuentra datos -->
            <del>No hay registros en la base de datos</del>
            @endforelse
          </div>
        </div>
      </section>
      <!-- ======= Monitores Section ======= -->
      <section id="tv">
        <div class="container">
          <div class="row">
            <div class="section-title">
              <h2>
                <font color="black">Monitores</font>
              </h2>
              <h3><span>Productos</span></h3>
            </div>

            @forelse($tvs as $tv)
            <!-- renderizar datos -->
            <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
              <div class="card-header">
                <font color="teal">
                  <h3 class="text-secundary text-center"><b>{{ $tv->brand }}</b>
                    <h4 class="text-center">{{ $tv->model }}</h4>
                  </h3>
                </font>
              </div>
              <div class="card-body">
                <p class="card-text">{{ $tv->description }}</p>
                <div class="">
                  <p class="text-muted">Conexion: <b>{{ $tv->wifi }}</b></p>
                </div>
                <div class="">
                  <p class="text-muted">Herz: <b>{{ $tv->hz }}</b></p>
                  <br>
                  <img style="width: 280px; height: 450; object-fit: cover; " src="/imagenes/tvs/{{$tv->image}}" alt="{{$tv->brand}}{{$tv->model}}" />
                </div>
                <br>
                <div class="">
                  <p class="text-muted">Comentario: <font color="teal">{{ $tv->comment }}</font>
                  </p>
                </div>
              </div>
              <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-outline-info padding-left mr-2" href="{{ url('login') }}"><i class="fas fa-info"></i>
                  <font color="teal"><b> Ver más </b></font>
                </a>
              </div>
            </div>
            @empty
            <!-- Mensaje por si no encuentra datos -->
            <del>No hay registros en la base de datos</del>
            @endforelse
          </div>
        </div>
      </section>

      <!-- ======= Sillas Section ======= -->
      <section id="chair">
        <div class="container">
          <div class="row">
            <div class="section-title">
              <h2>
                <font color="black">Sillas Gamer</font>
              </h2>
              <h3><span>Productos</span></h3>
            </div>

            @forelse($chairs as $chair)
            <!-- renderizar datos -->
            <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
              <div class="card-header">
                <font color="teal">
                  <h3 class="text-secundary text-center"><b>{{ $chair->brand }}</b>
                    <h4 class="text-center">{{ $chair->model }}</h4>
                  </h3>
                </font>
              </div>
              <div class="card-body">
                <p class="card-text">{{ $chair->description }}</p>
                <div class="">
                  <p class="text-muted">Peso Soportado: <b>{{ $chair->weight }}</b></p>
                </div>
                <div class="">
                  <p class="text-muted">Tipo de Respaldo: <b>{{ $chair->fixed }}</b></p>
                  <br>
                  <img style="width: 180px; height: 350; object-fit: cover; " src="/imagenes/chairs/{{$chair->image}}" alt="{{$chair->brand}}{{$chair->model}}" />
                </div>
                <br>
                <div class="">
                  <p class="text-muted">Comentario: <font color="teal">{{ $chair->comment }}</font>
                  </p>
                </div>
              </div>
              <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-outline-info padding-left mr-2" href="{{ url('login') }}"><i class="fas fa-info">
                  </i>
                  <font color="teal"><b> Ver más </b></font>
                </a></a>
              </div>
            </div>
            @empty
            <!-- Mensaje por si no encuentra datos -->
            <del>No hay registros en la base de datos</del>
            @endforelse
          </div>
        </div>
      </section>

      <!-- ======= Vehiculos Section ======= -->
      <div class="section-title">
        <h2>
          <font color="black">Vehiculos</font>
        </h2>
        <h3><span>Productos</span></h3>
      </div>

      <div class="container">
        <div class="row">

          @forelse($vehicles as $vehicle)
          <!-- renderizar datos -->

          <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
            <div class="card-header">
              <font color="teal">
                <h3 class="text-secundary text-center"><b>{{ $vehicle->brand }}</b>
                  <h4 class="text-center">{{ $vehicle->model }}
                    <h /4>
                </h3>
              </font>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $vehicle->description }}</p>
              <div class="">
                <p class="text-muted">Color: <b>{{ $vehicle->color }}</b></p>
              </div>
              <div class="">
                <p class="text-muted">Kilometraje:<b> {{ $vehicle->mileage }}</b></p>
                <br>
                <img style="width: 280px; height: 450; object-fit: cover; " src="/imagenes/vehicles/{{$vehicle->image}}" alt="{{$vehicle->brand}}{{$vehicle->model}}" />
              </div>
              <br>
              <div class="">
                <p class="text-muted">Comentario: <font color="teal">{{ $vehicle->comment }}</font>
                </p>
              </div>
            </div>
            <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-outline-info padding-left mr-2" href="{{ url('login') }}"><i class="fas fa-info">
                </i>
                <font color="teal"><b> Ver más </b></font>
              </a>
            </div>
          </div>
          @empty
          <!-- Mensaje por si no encuentra datos -->
          <del>No hay registros en la base de datos</del>
          @endforelse
        </div>
      </div>
    </section>

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-down">
          <span>Franco</span>
          <h2><font color="black">Contacto</font></h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-user"></i>
              <h3>
                Nombre
              </h3>
              <p>
                Carlos Daniel Rodriguez Franco
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Contacto</h3>
              <p class="email-text">
                @foreach($information as $info)
                {{$info->email}}
                @endforeach
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Telefono</h3>
              <p>
                @foreach($information as $info)
                {{$info->phone}}
                @endforeach
              </p>
            </div>
          </div>
        </div>
        <br>

        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-8" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-pencil"></i>
              <h3>Eslogan</h3>
              <p>
                @foreach($information as $info)
                {{$info->slogan}}
                @endforeach
              </p>
            </div>
          </div>

          <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>

        </div>
    </section>
    <!-- End Contact Us Section -->

    <!-- ======= Footer ======= -->
    <footer id="information">

      <div class="container py-4">
        <div class="copyright">

          &copy; Copyright <strong><span>BizLand</span></strong>. @forelse($information as $info) {{$info->copyrigth}}
          @empty

          Todos los derechos reservados.

          @endforelse
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade and Franco</a>
        </div>
      </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('homes/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('homes/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('homes/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('homes/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('homes/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('homes/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('homes/assets/js/main.js')}}"></script>

</body>

</html>