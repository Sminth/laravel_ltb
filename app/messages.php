<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    use CrudTrait;

    protected $fillable = [
        'contenu',
        'fichier',        
    ];
}
