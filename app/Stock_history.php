<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_history extends Model
{
    //

    public function user(){
    	return $this->hasOne('App\User','id','client_id');
    }

     public function product(){
    	return $this->hasOne('App\product','id','product_id');
    }
}
