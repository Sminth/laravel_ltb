<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
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
