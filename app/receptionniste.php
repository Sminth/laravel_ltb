<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receptionniste extends Model
{
    use CrudTrait;

    protected $fillable = [
        'num_cni',
        'date_naissance',        
    ];
}
