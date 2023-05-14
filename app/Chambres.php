<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chambres extends Model
{
    
    //
    // use HasFactory;
    use CrudTrait;

    protected $fillable = [
        'num_chambre',
        'description',
        'photo',
        'superficie',
        'limite',
        'prix',
        'id_EtatChambre'        
    ];

    public function EtatChambre(){
        return $this->belongsto(EtatChambre::class, 'id_EtatChambre', 'id');
    }
}

