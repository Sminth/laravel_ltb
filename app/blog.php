<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{ use CrudTrait;
    protected $fillable = [
        'titre',
        'sous-titre', 
        'photo',
        'contenu',       
    ];
   
}
