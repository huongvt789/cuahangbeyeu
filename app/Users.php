<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Users extends Model 
{
    protected $table='users';
    protected $fillable = [
         'email', 'password','avatar','fullname','phonenumber','address',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
