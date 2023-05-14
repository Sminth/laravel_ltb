<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use CrudTrait;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'message',     
    ];
}
