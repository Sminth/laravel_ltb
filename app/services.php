<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use CrudTrait;

    protected $fillable = [
        'nom',
        'photo',  
        'etat',       
    ];
}
