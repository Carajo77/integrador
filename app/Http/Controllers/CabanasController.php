<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabanasController extends Controller
{
	public function listado() {
	  return view("listadocabanas");
	}
}
