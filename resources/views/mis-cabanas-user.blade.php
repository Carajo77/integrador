@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-12">
            <ul class="nav nav-pills mb-3 bg-light" id="pills-tab" role="tablist" style="padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 5px;">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Publicadas</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
              </li>
            </ul>

            <div class="tab-content" id="pills-tabContent" >
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" >
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th >#</th>
                      <th >Nombre</th>
                      <th >Precio</th>
                      <th >Ubicación</th>
                      <th >Estado</th>
                      <th >Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($datos as $dato)
                    <tr>
                      <th scope="row">{{$dato->id_cabanas}}</th>
                      <td>{{$dato->titulo}}</td>
                      <td>{{$dato->precio_persona}}</td>
                      <td>{{$dato->ubicacion}}</td>
                      <td>
                        @if ($dato->estado == "pendiente")
                          <span class="badge badge-warning">Pendiente</span>
                        @elseif($dato->estado == "aprobada")
                          <span class="badge badge-success">Publicada</span>
                      @endif
                        
                        </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-eye" aria-hidden="true" style="color:white;"></i> </button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:white;"></i></button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                       </td>
                    </tr>
                    @empty
                    <p>Aún no publicas ninguna cabaña</p>
                    @endforelse
                      
                    <!-- <tr>
                      <th scope="row">1</th>
                      <td>Los Pinos</td>
                      <td>$34.534</td>
                      <td>San Luis</td>
                      <td class="text-success"><span class="badge badge-success">Publicada</span></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-eye" aria-hidden="true" style="color:white;"></i> </button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:white;"></i></button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Los Pinos</td>
                      <td>$34.534</td>
                      <td>San Luis</td>
                      <td class="text-white"><span class="badge badge-warning text-white">Pnediente</span></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-eye" aria-hidden="true" style="color:white;"></i> </button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:white;"></i></button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Los Pinos</td>
                      <td>$34.534</td>
                      <td>Mendoza</td>
                      <td class="text-danger"><span class="badge badge-danger">Rechazada</span></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-eye" aria-hidden="true" style="color:white;"></i> </button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:white;"></i></button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                       </td>
                       <tr>
                      <th scope="row">1</th>
                      <td>Los Pinos</td>
                      <td>$34.534</td>
                      <td>Emos</td>
                      <td class="text-success"><span class="badge badge-success">Publicada</span></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-eye" aria-hidden="true" style="color:white;"></i> </button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:white;"></i></button>
                          <button type="button" class="btn boton-mis-reservas"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                       </td>
                    </tr>
                    </tr> -->
                  </tbody>
                </table>
            </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <form action="/mis-cabanas-agregar" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">

                          <div class="form-row">
                            <div class="col-md-6">
                              <label for="">Titulo</label>
                                <input type="text" name="titulo" class="form-control input-con-radio" required="">
                            </div>
                            <div class="col-md-6">
                              <label for="">Cantidad Personas</label>
                                <input type="number" name="cantidad-personas" class="form-control input-con-radio" required="">
                            </div>
                          </div>

                          <div class="form-row mt-3">
                            <div class="col-md-4">
                              <label for=""><b>Ubicación</b></label>
                                <select name="ubicacion" id="" class="form-control input-con-radio" required="">
                                    <option value="El Salto">El Salto</option>
                                    <option value="Las Vegas">Las Vegas</option>
                                    <option value="Piedras Blancas">Piedras Blancas</option>
                                    <option value="Valle del Sol">Valle del Sol</option>
                                    <option value="Los Zorzales">Los Zorzales</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                              <label for=""><b>Imagen Destacada</b></label>
                                <input type="file" name="foto" class="form-control" required="">
                            </div>
                            <div class="col-md-4">
                              <label for=""><b>Precio x Persona</b></label>
                                <input type="number" name="precio-persona" class="form-control" required="">
                            </div>
                            
                          </div>
                          <div class="form-row mt-3">
                            <div class="col-md-12">
                              <label for=""><b>Servicios</b></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">Aire</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                                          <label class="custom-control-label" for="customCheck2">Estacionamiento</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck3">
                                          <label class="custom-control-label" for="customCheck3">Cocina</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck4">
                                          <label class="custom-control-label" for="customCheck4">Wifi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck5">
                                          <label class="custom-control-label" for="customCheck5">Gas</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck6">
                                          <label class="custom-control-label" for="customCheck6">Desayuno</label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                          </div>
                            <div class="form-group mt-3">
                                <label for=""><b>Descripción</b></label>
                                <textarea name="descripcion" id="" cols="30" rows="10" class="form-control input-con-radio" required=""></textarea>
                                <!-- <input type="text" name="titulo" class="form-control input-con-radio"> -->
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-agregar-cabana">Agregar</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            </div>
            
        </div>
    </div>
</div>
@endsection
<!-- 
<table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table> -->
