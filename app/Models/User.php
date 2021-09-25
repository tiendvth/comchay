<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticable
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable= [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'username',
        'password',
        'role'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
