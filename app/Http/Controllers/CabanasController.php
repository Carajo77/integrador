<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CabanaModel;

class CabanasController extends Controller
{
	public function listado() {
		$datos = CabanaModel::all();
		$vac = compact("datos");
		return view('listadocabanas',$vac);
	}

	public function detalle($id) {
		$datos = CabanaModel::find($id);
		$vac = compact("datos");
		return view('detalles',$vac);
	}

	public function agregar(Request $form) {

	$cabana = new CabanaModel();

	$path = $form->file("foto")->store("public");

    $nombreFoto = basename($path);

    $cabana->foto = $nombreFoto;

	$cabana->titulo = $form['titulo'];

	$id_usuario_redirec = $form['id_usuario'];

   	$cabana->descripcion = $form['descripcion'];
	$cabana->catidad_personas = $form['cantidad-personas'];
	$cabana->servicios = "nada";
	$cabana->precio_persona = $form['precio-persona'];
	$cabana->ubicacion = $form['ubicacion'];
	$cabana->id_usuario = $id_usuario_redirec;
	// $cabana->comentarios = "nada";
	// $cabana->calificaciones = "nada";

	$cabana->save();

	return redirect("/mis-cabanas/".$id_usuario_redirec."");

	}

	public function mostrar($id){
		$datos = CabanaModel::where("id_usuario","=","$id")->get();
		$vac = compact("datos");
		return view('/mis-cabanas-user',$vac);
		// return redirect("/mis-cabanas/".$id."");
	}

	public function reservas(){

		return view("mis-reservas");
	}
}
