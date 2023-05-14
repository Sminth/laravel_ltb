<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use CrudTrait;

    protected $fillable = [
        'num_res',
        'debut',   
        'fin',
        'duree',
        'total',
        'rabais',
        'ttc',
        'id_EtatReserva',       
    ];
}
