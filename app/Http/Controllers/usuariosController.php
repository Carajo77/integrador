<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\UsuarioModel;

class usuariosController extends Controller
{
    public function actualizar(Request $form){

    	// $usuario = new UsuarioModel();

    	$usuario = UsuarioModel::find($form['id_user']);

    	if (isset($form['password']) && isset($form['repetir-password'])) {
    		if($form['password'] == $form['repetir-password']){
	    		$usuario->password =Hash::make($form['password']);
	    	}else {
	    		$usuario->password = UsuarioModel()->passwrod();
	    	}
    	}else {
    		$usuario->password = UsuarioModel()->passwrod();
    	}

    	

    	// if(isset($form['foto'])){

    	// }

    	// $path = $form->file("foto")->store("public");

    	// $nombreFoto = basename($path);

    	$usuario->name = $form['nombre'];
    	$usuario->email = $form['email'];
    	
    	// $usuario->foto = $nombreFoto;
    	$usuario->apellido = $form['apellido'];
    	$usuario->telefono = $form['telefono'];

    	$usuario->save();

    	return redirect("home");

    }
    public function foto(Request $form){

    	$usuario = UsuarioModel::find($form['id_user']);

    	$path = $form->file("foto")->store("public");

    	$nombreFoto = basename($path);

    	$usuario->foto = $nombreFoto;

    	$usuario->save();

    	return redirect("perfil-user");

    }
}
