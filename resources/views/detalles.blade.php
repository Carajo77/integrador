@extends('layouts.app')

@section('content')
    <title>Detalles</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/detalles.css">

    <div class="container">
      <div class="row">
          <div class="col-md-12 nombreCabaña-w">
          <h1 class="willi-title">Nombre Cabaña</h1>
         </div>
    </div>
      <div class="row todo-w">
        <div class="col-md-8 divImg">


          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="/img/leñas.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="/img/diqueee.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/aventuras-bici.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <p class="p-w">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


        </div>

        <div class="col-md-4 fechas">
          <div class="row">
            <div class="col-md-12 cuadro-w">
            <h3 class="h3-ttle">Desde</h3>
              <div class="input-group mb-2">

                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                </div>

                <input type="date" class="form-control" id="inlineFormInputGroup" placeholder="Disponibilidad">
              </div>
            </div>
            <div class="col-md-12 cuadro-w">
            <label for=""><h3 class="h3-ttle">Hasta</h3> </label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                </div>

                <input type="date" class="form-control" id="inlineFormInputGroup" placeholder="desde">
              </div>
            </div>
            <div class="col-md-12 cuadro-w">
              <h3 class="h3-ttle">Personas</h3>
              <div class="input-group mb-2">

                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-male" aria-hidden="true"></i></div>
                </div>

                <input type="number" class="form-control" id="cantidad-personas-filtro" placeholder="Adultos">
                <input type="number" class="form-control" id="cantidad-personas-filtro" placeholder="Niños">
              </div>


              <div class="col-md-12">
              <button type="button" class="btn btn-primary btn-lg btn-block">Verificar Disponibilidad</button>
              </div>


          </div>






              </div>
          </div>
          <div class="row">
            <div class="col-md-12 cuadro-w">
              <div class="servicios-w">
                <h3 class="serviciosh3">Serivicios de la Cabaña:</h3>
                <ul>
                  <li class="lista-w">
                    <img src="https://img.icons8.com/pastel-glyph/64/000000/air-conditioner--v2.png">  "Aire Acondicionado"
                  </li>
                  <li class="lista-w">
                    <img src="https://img.icons8.com/wired/64/000000/the-toast.png">"Servicio De Bebida"
                  </li>
                  <li class="lista-w">
                    <img src="https://img.icons8.com/ios-filled/62/000000/tv.png">"Tv Por Cable"
                  </li>
                  <li class="lista-w">
                   <img src="https://img.icons8.com/carbon-copy/62/000000/online-support--v1.png">"Servicios 24/24"
                  </li>
                </ul>

              </div>
            </div>
          </div>



        </div>

      </div>
        <footer class="footer-w ">
        <div class="row">
            <div class="col-md-4">
              <h4 class="h4-2">Argentina</h4>
              <a class="boton-a" href="#">Mendoza</a>
              <a class="boton-a" href="#">Buenos Aires</a>
              <a class="boton-a" href="#">Misiones</a>
              <a class="boton-a" href="#">Mar del plata</a>
              <a class="boton-a" href="#">Cordoba</a>
            </div>
            <div class="col-md-4">
              <h4 class="h4-2">Brasil</h4>
              <a class="boton-a" href="#">Rio De Janeiro</a>
              <a class="boton-a" href="#">Buzios</a>

            </div>


            <div class="col-md-4">
              <h3>Informacion de contacto</h3>
              <p class="p-w"><i class="fa fa-envelope" aria-hidden="true"></i> Email: info@dominio.com</p>
              <p class="p-w"><i class="fa fa-phone-square" aria-hidden="true"></i> Teléfono: 34534534</p>
              <p class="p-w"><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección: av.siempre viva </p>
            </div>


        </div>
        </footer>
    </div>




@endsection
