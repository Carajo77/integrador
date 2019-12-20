<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    public $table = "users";
    //public $primaryKey = "id";
    // public $timestamps = false;
    public $guarded=[];

    public function passwrod(){
    	return $this->password;
    }
}
