<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
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
