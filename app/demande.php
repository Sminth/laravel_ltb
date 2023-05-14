<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demande extends Model
{
    use CrudTrait;

    protected $fillable = [
        'heure_depart',
        'contenu',
        'id_preference',      
    ];
}
