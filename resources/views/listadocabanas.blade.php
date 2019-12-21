@extends('layouts.app')

@section('content')
<div class="container-fluid fondo-titulo-listado" style="padding-left:0">
    <div style="background: rgb(186,187,187);
background: linear-gradient(90deg, rgba(186,187,187,1) 6%, rgba(255,255,255,0) 82%);">
        <div class="col-md-12 text-center pt-5 pb-5">
        <h1 class="text-white">Viví una experiencia unica</h1>
    </div>
    </div>


</div>
<div class="container-fluid mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 aside-m3-fijo">
                <aside class="aside-fijo-listado pt-3 pb-3">

                    <div class="row mt-3 mb-3">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-12">
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-male" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="number" class="form-control" id="cantidad-personas-filtro" placeholder="Cantidad">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                    </div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Seleccionar..</option>
                                        <option value="">El Salto</option>
                                        <option value="">Las Vegas</option>
                                        <option value="">Piedras Blancas</option>
                                        <option value="">Valle del Sol</option>
                                        <option value="">Sobre rio Blanco</option>
                                        <option value="">Valle del Sol</option>
                                    </select>

                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-star" aria-hidden="true"></i></div>
                                    </div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Seleccionar..</option>
                                        <option value="">+ 1</option>
                                        <option value="">+ 2</option>
                                        <option value="">+ 3</option>
                                        <option value="">+ 4</option>
                                        <option value="">+ 5</option>
                                        <option value="">+ 6</option>
                                    </select>

                                  </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-auto">
                                <label for="">Desde </label>
                                  <div class="input-group mb-2">

                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                    </div>

                                    <input type="date" class="form-control" id="inlineFormInputGroup" placeholder="Disponibilidad">
                                  </div>
                                </div>
                                <div class="col-auto">
                                <label for="">Hasta </label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="date" class="form-control" id="inlineFormInputGroup" placeholder="Disponibilidad">
                                  </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" style="width:100%">BUSCAR <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/03.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>

                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>

                                 </div>
                            </div>

                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/02.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/01.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/01.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/01.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/02.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/03.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/02.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/01.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/03.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/01.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card-listado-cabanas" style="text-decoration:none">
                            <div class="card cuerpo-listado-cabanas">
                                <img src="/img/01.jpeg" class="card-img-top" alt="...">
                                <div class="card-body ">


                                    <h5 class="card-title">El Pinar</h5>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <p><i class="fa fa-users"></i> 5</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> 3</p>
                                        </div>

                                        <div class="col-md-3">
                                            <p><i class="fa fa-car" aria-hidden="true"></i> Si</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><i class="fa fa-wifi" aria-hidden="true"></i> Si</p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Las vegas</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="badge badge-success">9.4</span> Excelente</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:green;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Disponible</p>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                      <a href="detalles"><button type="button" class="btn btn-info willi">Detalles</button></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
