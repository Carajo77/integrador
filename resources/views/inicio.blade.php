@extends('layouts.app')

@section('content')

  <!-- PORTADA -->

  <div class="container-fluid bg-dark " style="padding-left:0;padding-right:0">
    <div>
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active" >
                <img src="/img/slider/2yz1ybgdngb21.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="text-uppercase">Bienvenidos</h1>


                </div>
              </div>
              <div class="carousel-item">
                <img src="/img/slider/_mg_7691-editar.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="text-uppercase">Bienvenidos</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/img/slider/lago-potrerillos.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="text-uppercase">Bienvenidos</h1>


                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- DESTACADAS -->

  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2></h2>
        </div>
      </div>


    <div class="container-fluid seba-caja-2">
      <div class="container">
        <div class="row">
        <div class="col-md-6 divs-posibilidades">
        <a class="hiper-seba-pablo" href="/alojamiento"> <h2 class="seba-seba-seba">Alojamientos</h2>
            <img class="foto-inicio-seba" src="/img/antuen.jpg" alt=""></a>
        </div>
        <div class="col-md-6 divs-posibilidades">
          <a href="/experiencias" class="hiper-seba-pablo"> <h2 class="seba-seba-seba1">Experiencias</h2>
            <img class="foto-inicio-seba1" src="/img/306557-P7UDSE-132.jpg" alt=""></a>
        </div>
        </div>
      </div>
    </div>


  








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
