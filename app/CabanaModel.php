<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CabanaModel extends Model
{
    public $table = "cabanas";
    public $primaryKey = "id_cabanas";
    public $timestamps = false;
    public $guarded=[];
}
