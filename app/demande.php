<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
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
