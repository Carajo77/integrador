@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="seba-seba">Conoce nuevos destinos {{ Auth::user()->name }}</h1>
          <hr>
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
          <hr>
          <div class="container-fluid ">
            <div class="container ">
              <h1 class="pablo-p">Aventuras</h1>
              <div class="row">
                <div class="col-md-3">
                  <img class="img-f" src="/img/aventuras-bici.jpg" alt="">
                  <h4 class="pablo-pablo" >Mountain Bike</h4>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Bienvenido  {{ Auth::user()->name }}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Este es tu email: {{ Auth::user()->email }}
>>>>>>> 9b33bc1e3672ad01a6b3b2a5ae72af7dc51508d5
                </div>
                <div class="col-md-3">
                  <img class="img-f" src="/img/cabalgatas.jpg" alt="">
                  <h4 class="pablo-pablo">Cabalgatas</h4>
                </div>
                <div class="col-md-3">
                  <img class="img-f" src="/img/Kayak.jpg" alt="">
                  <h4 class="pablo-pablo">Kayak</h4>
                </div>
                <div class="col-md-3">
                  <img class="img-f" src="/img/parapentes.jpg" alt="">
                  <h4 class="pablo-pablo">Parapentes</h4>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
