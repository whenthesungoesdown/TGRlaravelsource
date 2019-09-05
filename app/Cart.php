<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Cart extends Model
{
    //
    protected $table = 'cart';
    protected $fillable=[
        'product_name','product_id','price','pic',
    ];
}