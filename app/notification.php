<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use CrudTrait;

    protected $fillable = [
        'titre',
        'message',
        'etat',       
    ];
}
