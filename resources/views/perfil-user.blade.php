@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
    	<div class="col-md-4 text-center">
    		<img src="/storage/{{ Auth::user()->foto }}" alt="" class="img-fluid">
    		<div class="row mt-3">
                <form action="/guardar-foto-usuario" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="file" name="foto" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-success"><i class="fa fa-picture-o" aria-hidden="true"></i> Actualizar Foto</button>
                        </div>
                    </div>
                </form>
    		</div>
    		
    	</div>
        <div class="col-md-8">
            
            <div class="row">
            	<div class="col-md-12">
            		<div class="card">
					  <div class="card-header"><h5>Editar Perfil</h5></div>
					  <div class="card-body">
                        <form action="/guardar-usuario" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" class="form-control" required value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Apelldio</label>
                                <input type="text" name="apellido" class="form-control" required value="{{ Auth::user()->apellido }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Teléfono</label>
                                <input type="number" name="telefono" class="form-control" required value="{{ Auth::user()->telefono }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Nueva Contraseña</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Repetir Contraseña</label>
                                <input type="password" name="repetir-password" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 text-center">
                                <input class="btn btn-success" type="submit" value="Actualizar">
                            </div>
                        </div>
                        
                    </form>               
                      </div>

					</div>

                    
                    
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection
