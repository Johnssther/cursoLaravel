<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    public $timestamp = true;

    public function usuario() {

        return $this->hasOne('App\Models\Usuario','id','id_usuario');

    }

}
