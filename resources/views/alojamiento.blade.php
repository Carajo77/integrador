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
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caja-de-m">
              <h2 class="lugares-para-ir">Lugares mas concurridos en Mendoza</h2>
            </div>
          </div>
          <div class="col-md-4 cajas-alojamiento ">
            <h2 class="seba-f">Potrerillos</h2>
            <img class="imagen-dique img-thumbnail"src="/img/diqueee.jpg" alt="">
          </div>
          <div class="col-md-4 cajas-alojamiento">
            <h2 class="seba-f">Carrizal</h2>
            <img class="imagen-dique img-thumbnail"src="/img/carizzal.jpg" alt="">
          </div>
          <div class="col-md-4 cajas-alojamiento">
            <h2 class="seba-f">Leñas</h2>
            <img class="imagen-dique img-thumbnail"src="/img/leñas.jpg" alt="">
          </div>
        </div>

      </div>

    </div>
  </body>
</html>
@endsection
