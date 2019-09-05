<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{
    protected $table = 'products';
    public $primaryKey  = 'id';
    protected $fillable=[
        'product_name','product_id','price',
    ];
}