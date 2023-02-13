<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Notifications\Notifiable;
class Clients extends Model implements Authenticatable
{
    
    use Notifiable;
    use BasicAuthenticatable;
    protected $fillable = ['nom','prenom','email', 'password','enabled','telephone','google_id','facebook_id'];
    public function wishlist(){
        return $this->hasMany(Wishlist::class,'id_client','id');
    }   
}
