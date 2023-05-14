<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents_legaux extends Model
{
    use CrudTrait;

    protected $fillable = [
        'nom',
        'contenu',
        'fichier',          
    ];
}
