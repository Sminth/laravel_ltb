<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compte extends Model
{
    use CrudTrait;

    protected $fillable = [
        'mot_passe',
        'id_RoleActeur',
        'status',      
    ];
}
