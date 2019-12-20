@extends('layouts.app')

@section('content')

  <!-- CONTACTO -->

  <div class="container-fluid  fondo-contacto" style="padding-left:0;padding-right:0">
    <div class="container-fluid fondo-con-opacidad pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form method="POST" action="/form-contacto">
              {{csrf_field()}}
              <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingresar nombre" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Colocar email" name="email"  required>
              </div>
              <div class="form-group">
                <label for="">Consulta</label>
                <textarea class="form-control" name="consulta" id="" cols="30" rows="10" required>

                </textarea>
              </div>
              <button type="submit" class="btn btn-success boton-enviar">Enviar</button>
            </form>
          </div>
          <div class="col-md-6 text-center">
            <h3 class="pablo-pablo-pablo">Informacion de contacto</h3>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: info@dominio.com</p>
            <p><i class="fa fa-phone-square" aria-hidden="true"></i> Teléfono: 34534534</p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección: av.siempre viva </p>
          </div>
        </div>
      </div>
    </div>

  </div>



<!--FAQ-->

<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="preguntas-frecuentes"><strong>Preguntas Frecuentes</strong></h2>
      </div>
      <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#seba" aria-expanded="true" aria-controls="collapseOne">
                  <strong class="btn-color-faq">¿Como puedo crear una cuenta?</strong>
                </button>
              </h2>
            </div>

            <div id="seba" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Si aun no tienes una cuenta de Antü, accede a antü.mx y has click en Registrarse. Puedes registrarte utilizando cuenta de correo electronico, cuenta de Facebook o cuenta de google.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <strong class="btn-color-faq">¿Aceptan mascotas?</strong>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#seba1" aria-expanded="false" aria-controls="seba1">
              <strong class="btn-color-faq">¿Puedo cancelar una semana antes?</strong>
                </button>
              </h2>
            </div>
            <div id="seba1" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
              En Antü los anfitriones eligen las políticas de cancelación que se aplican a las reservas de los huespedes. Los terminos varian segun segun el alojamiento y el tiempo que falte para el check-in.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#seba2" aria-expanded="false" aria-controls="seba2">
              <strong class="btn-color-faq">¿Puedo llamar para concluir la reserva?</strong>
                </button>
              </h2>
            </div>
            <div id="seba2" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#seba3" aria-expanded="false" aria-controls="collapseThree">
              <strong class="btn-color-faq">¿Puedo cancelar un reserva por telefono?</strong>
                </button>
              </h2>
            </div>
            <div id="seba3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#seba4" aria-expanded="false" aria-controls="collapseThree">
              <strong class="btn-color-faq">¿Puedo ir sin ninguna excurcion?</strong>
                </button>
              </h2>
            </div>
            <div id="seba4" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>  
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <strong class="btn-color-faq">¿Hay señal en la montaña?</strong>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>















@endsection
