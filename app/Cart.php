<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $table = 'cart';
    protected $fillable=[
        'product_name','product_id','price','quantity','pic','session_id',
    ];
}
