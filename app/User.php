<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    /**
     * The table associated with the user
     *
     * @var string
     */
    protected $table = 'users';


    /**
     * The fillable attributes of the model
     *
     * @var array
     */
    protected $fillable = ['email', 'linkedin', 'github', 'username', 'password'];



}
