<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = "planes";

    protected $fillable = [
        "id",
        "nombre",
        "valor"
    ];
    public function personas(){
        $this->hasMany('App\Persona');
    }

    
}
