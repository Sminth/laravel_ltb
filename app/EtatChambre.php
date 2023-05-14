<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtatChambre extends Model
{
    use CrudTrait;

    protected $fillable = [
        'libelle',      
    ];
}
