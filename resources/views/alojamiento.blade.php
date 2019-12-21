@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container-fluid back-img">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caja-1-alojamiento">
              <h1 class="div-alojamiento"><strong>Alojamientos en Antû </strong></h1>
              <p class="div-alojamiento">Conoce los distintos alojaminetos que hay en Mendoza.</p>
              <button class="boton-alojamiento" type="button" name="button">Mas Info</button>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="container-fluid ">
      <div class="container ">
        <h1 class="pablo-p">Destinos</h1>
        <div class="row">
          <div class="col-md-3">
            <img class="img-f" src="/img/diqueee.jpg" alt="">
            <h4 class="pablo-pablo" >Potrerillos</h4>
          </div>
          <div class="col-md-3">
            <img class="img-f" src="/img/leñas.jpg" alt="">
            <h4 class="pablo-pablo">Leñas</h4>
          </div>
          <div class="col-md-3">
            <img class="img-f" src="/img/carizzal.jpg" alt="">
            <h4 class="pablo-pablo">Carrizal</h4>
          </div>
          <div class="col-md-3">
            <img class="img-f" src="/img/bodega.jpg" alt="">
            <h4 class="pablo-pablo">Bodega</h4>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
@endsection
