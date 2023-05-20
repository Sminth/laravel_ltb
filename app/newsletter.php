<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    use CrudTrait;

    protected $fillable = [
        'email',
        'status',      
    ];
}
