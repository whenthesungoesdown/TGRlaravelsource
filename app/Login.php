<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    protected $fillable = [
        'username','email','password','new_pass','password_confirmation',
    ];
}
