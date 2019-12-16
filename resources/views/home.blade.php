@extends('layouts.app')

@section('content')

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
                <p>Un finde soñado</p>
                <a href="" class="btn btn-success boton-explorar">Explorar</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/img/slider/_mg_7691-editar.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="text-uppercase">Bienvenidos</h1>
                <p>Un finde soñado</p>
                <a href="" class="btn btn-success boton-explorar">Explorar</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/img/slider/lago-potrerillos.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="text-uppercase">Bienvenidos</h1>
                <p>Un finde soñado</p>
                <a href="" class="btn btn-success boton-explorar">Explorar</a>
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
@endsection
