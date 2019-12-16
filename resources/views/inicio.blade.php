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

  <!-- DESTACADAS -->

  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2>Experiencias Unicas</h2>
        </div>
      </div>
      <div class="row">

        <div class="col-md-4 text-center">
          <div class="fondo">
            <img src="/img/parejas.jpg" alt="" class="img-fluid">
            <h4>Parejas</h4>
            <p></p>
            <a href="detalles.php" class="btn btn-success btn-lg boton-detalle" role="button" aria-pressed="true">Detalles</a>
          </div>
        </div>

        <div class="col-md-4 text-center ">
          <div class="fondo">
            <img src="/img/cabalgatas.jpg" alt="" class="img-fluid">
            <h4>Cabalgatas</h4>
            <p>Potrerillos</p>
            <p>Paseo y cabalgata en la naturaleza.</p>
            <p>Desde $250 </p>
            <a href="detalles.php" class="btn btn-success btn-lg boton-detalle" role="button" aria-pressed="true">Detalles</a>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="fondo">
            <img src="/img/kayak.jpg" alt="" class="img-fluid">
            <h4>Kayak</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsum impedit incidunt mollitia maiores voluptas, earum inventore eos, similique tempore.</p>
            <a href="detalles.php" class="btn btn-success btn-lg boton-detalle" role="button" aria-pressed="true">Detalles</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- FAQ -->

  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><strong>Preguntas Frecuentes</strong></h2>
        </div>
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <strong class="text-success">¿Reciben tarjetas?</strong>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong class="text-success">¿Aceptan mascotas?</strong>
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
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong class="text-success">¿Puedo cancelar una semana antes?</strong>
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

  <!-- CONTACTO -->
  <div class="container-fluid  fondo-contacto" style="padding-left:0;padding-right:0">
    <div class="container-fluid fondo-con-opacidad pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form>
              <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingresar nombre" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Colocar email" required>
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
            <h3>Informacion de contacto</h3>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: info@dominio.com</p>
            <p><i class="fa fa-phone-square" aria-hidden="true"></i> Teléfono: 34534534</p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección: av.siempre viva </p>
          </div>
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
