<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $table = "form-contacto";
    //public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
