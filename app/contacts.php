<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
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
