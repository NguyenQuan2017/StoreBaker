<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','type_product_id','description','unit_price','promotion_price','image','unit'];

    public function typeproduct(){

    	return $this->belongsTo('App\Models\TypeProduct','type_product_id','id');
    }
}
