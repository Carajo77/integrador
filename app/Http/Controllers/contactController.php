<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contacto;

class contactController extends Controller
{
    public function almacenar(Request $req){
      $contacto = new Contacto();
      $contacto->nombre = $req["nombre"];
      $contacto->email = $req["email"];
      $contacto->consulta = $req["consulta"];
      $contacto->save();

      return redirect("/contacto");
    }
}
