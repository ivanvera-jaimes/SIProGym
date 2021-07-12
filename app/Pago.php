<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Pago extends Model
{
    protected $table = "pagos";
    protected $fillable = [
        "id",
        "costo",
        "estado",
        "idPersona"
    ];
    public function persona(){
        $this->belongsTo('App\Pago');
    }
}
