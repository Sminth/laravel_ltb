<?php

namespace App;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;

    //
    protected $fillable = [
        'nom',
        'phone_1',
        'phone_2',
        'phone_3',
        'email_hotel', 
        'email_reservation', 
        'photo', 
        'video', 
        'id_pays', 
        'id_ville', 
        'etat', 
             
    ];
}
