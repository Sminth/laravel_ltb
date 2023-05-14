<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligne_Reservations extends Model
{
    use CrudTrait;

    protected $fillable = [
        'num_res',
        'sous_total',
        'nomb_pers',
        'nomb_adulte',
        'numb_enfant',        
    ];//
}
