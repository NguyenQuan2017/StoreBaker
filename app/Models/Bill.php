<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable =['customer_id','date_order','total','payment','note'];

    public function customer(){

    	return $this->belongsTo('App\Models\Customer');
    }

    public function billdetails(){

    	return $this->hasMany('App\Models\BillDetail');
    }
}
