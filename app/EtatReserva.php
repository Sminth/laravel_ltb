<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtatReserva extends Model
{
    use CrudTrait;

    protected $fillable = [
        'libelle'      
    ];
}
