<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    //
    protected $fillable=['name','number','address','state','city','pincode','mobile'];
}
