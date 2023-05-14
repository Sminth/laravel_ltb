<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
class admin extends Model
{ use CrudTrait;
    protected $fillable = [
        'num_cni',
        'date_naissance',        
    ];
}
