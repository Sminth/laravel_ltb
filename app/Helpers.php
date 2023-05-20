<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Helpers extends Model{
    use CrudTrait;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'message',     
    ];

function getPrice($prixendecimal)
{
    $prix=floatval($prixendecimal)/1000;
    return number_format($prix,3,',','');
}
function getGoodPrix($prixendecimal)
{
    $prix= filter_var($prixendecimal, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    return $prix;
}
}
