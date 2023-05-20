<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use CrudTrait;
    protected $fillable = [
        'libelle',      
    ];
}
