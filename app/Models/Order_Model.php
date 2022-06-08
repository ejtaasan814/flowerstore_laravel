<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Model extends Model
{
     
	protected $table = 'order_table';

     public function product()
    {
        return $this->belongsTo(Products_Model::class,'product_id','id');
    }


    public function user()
    {
        return $this->belongsTo(Users_Model::class,'user_id','id');
    }


    public static function getPrice(){

    	$data = Order_Model::sum('price');
    	return $data;
    }

}
