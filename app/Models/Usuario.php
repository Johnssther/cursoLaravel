<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey='id';

    public $timestamp = false;

    /* nombre tabla
    llave primaria
    timestamp false */
}
