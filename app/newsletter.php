<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    use CrudTrait;

    protected $fillable = [
        'email',
        'status',      
    ];
}
