<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
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
