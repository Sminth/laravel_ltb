<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adresse extends Model
{
    use SoftDeletes;

    protected $table = 'adresses';
    protected $guarded = ['id'];
    protected $fillable = ['id', 'id_client', 'code_commune', 'description', 'latitude', 'longitude'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function commune()
    {
        return $this->belongsTo('App\Models\Communes','code_commune','code');
    }
}
