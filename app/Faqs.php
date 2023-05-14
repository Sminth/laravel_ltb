<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use CrudTrait;

    protected $fillable = [
        
        'question',
        'reponse',
                
    ];
}
