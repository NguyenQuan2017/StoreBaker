<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable=['bill_id','product_id','quantity','unit_price'];

    public function bill(){

    	return $this->belongsTo('App\Models\Bill');
    }

    public function customer(){

    	return $this->belongsTo('App\Models\Customer');
    }
}
