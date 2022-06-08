<?php

namespace App\Http\Controllers;
use App\Models\Order_Model;
use Illuminate\Http\Request;

class Order_Controller extends Controller
{
     //Orders Page
    public function orders(){
        session()->put('nav','orders');
       	$data['orders'] = Order_Model::with(['user','product'])->get();
          
       	$data['total'] = Order_Model::getPrice();
    	return view('orders',$data);
    }
}
