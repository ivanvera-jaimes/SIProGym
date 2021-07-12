<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table="personas";

    protected $fillable=[
        "id",
        "nombre",
        "apellido",
        "edad",
        "email",
        "altura",
        "peso",
        "imc",
        "plan_id",
        "pago_id",
    ];
    public function plan(){
        return $this->belongsTo('App\Plan');
    }
    public function pagos(){
        return $this->hasMany('App\Pago');
    }
    public function productos(){
        return $this->hasMany('App\Producto');
    }


}
