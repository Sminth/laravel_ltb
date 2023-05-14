<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use CrudTrait;
    protected $fillable = [
        'libelle',      
    ];
}
