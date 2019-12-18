@extends('layouts.app')

@section('content')

    <!-- CABAÑAS DESTACADAS -->
    <div class="container-fluid pt-5 pb-5 destacadas">
      <div class="container col-md-12">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h1>Nombre Cabaña Destacada</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="room-thumbnail imagen">
              <img src="/img/01.jpeg" alt="" class="img-fluid">
            </div>
          <div class="lado">
            <img src="/img/02.jpeg" alt="" class="img">
            <img src="/img/02.jpeg" alt="" class="img">
            <img src="/img/02.jpeg" alt="" class="img">
          </div>
          </div>

          <div class="fondo col-md-4 text-center borde">
            <div class="row ">
              <div class="col-md-12 text-center fecha">
                <h4>Fecha</h4>
                <div class="row">
                  <div class="col-md-6 text-center fechas">
                    <h6>Ingreso</h6>
                    <input type="date" name="" value="">
                  </div>
                  <div class="col-md-6 text-center fechas">
                    <h6>Salida</h6>
                    <input type="date" name="" value="">
                  </div>
                </div>
              </div>
              <div class="col-md-12 text-center fecha">
                <h4>Invitados</h4>
                <div class="row">
                  <div class="col-md-6 text-center fechas form-group">
                    <h6>Adultos</h6>
                    <select class="custom-select" id="inputGroupSelect01">
                   <option selected>Cuantos..</option>
                   <option value="1">Uno</option>
                   <option value="2">Dos</option>
                   <option value="3">Tres</option>
                 </select>
                  </div>
                  <div class="col-md-6 text-center fechas form-group">
                    <h6>Niños</h6>
                    <select class="custom-select" id="inputGroupSelect01">
                   <option selected>Cuantos..</option>
                   <option value="1">Uno</option>
                   <option value="2">Dos</option>
                   <option value="3">Tres</option>
                 </select>
                  </div>

                </div>
                <button type="button" class="btn btn-primary btn-lg btn-block">Verificar Disponibilidad</button>
              </div>
            </div>

           </div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

         <div class="servicios">
           <h4>Serivicios de la Cabaña:</h4>
           <ul>
             <li>
               <img src="https://img.icons8.com/pastel-glyph/64/000000/air-conditioner--v2.png">  "Aire Acondicionado"
             </li>
             <li>
               <img src="https://img.icons8.com/wired/64/000000/the-toast.png">"Servicio De Bebida"
             </li>
             <li>
               <img src="https://img.icons8.com/ios-filled/62/000000/tv.png">"Tv Por Cable"
             </li>
             <li>
              <img src="https://img.icons8.com/carbon-copy/62/000000/online-support--v1.png">"Servicios 24/24"
             </li>
           </ul>

         </div>




           </div>

         </div>
      













@endsection
