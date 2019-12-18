<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    public function agregar(Request $req){

      $reglas = [
        "nombre"=> "string|required|min:3|",
        "email" => "email:rfc,dns",
        "consulta" =>"string|required|max:200"
      ];

      $mensajes = [
        "string" => "El campo :attribute debe ser un texto",
        "email" => "El camp :attribute debe ser un email",
        "max" => "El campo :attribute debe terner un :max",
        "min" => "El campo :attribute debe tener un :min"
      ];


      $this->validate($req, $reglas, $mensajes);



      $contactoNuevo = new Contacto();

      $contactoNuevo-> nombre = $req["nombre"];
      $contactoNuevo-> email = $req["email"];
      $contactoNuevo-> consulta = $req["consulta"];

      $contatcoNuevo->save();
      return redirect(/'inicio');

    }








   }
}
