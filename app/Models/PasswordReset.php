<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */

    protected $table = 'password_resets';
    protected $primaryKey = 'email';
    public $timestamps = false;
    protected $guarded = ['email'];
    protected $fillable = ['email','token'];
    // protected $hidden = [];
    protected $dates = ['created_at'];
    public $incrementing = false;
    protected $keyType = "string";
}
