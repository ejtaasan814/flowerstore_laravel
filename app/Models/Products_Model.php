<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_Model extends Model
{
    protected $table = 'product_table';

    public function order(){
    	return $this->hasMany(Order_Model::class,'product_id','id');
    }


    public static function getData(){

    	$data = Products_Model::all();
    	return $data;
    }


    public static function saveProduct($request){
    	$products = new Products_Model;
 
		$products->product_name = $request->productname;
		$products->product_description = $request->productdesc;
		$products->quantity = $request->productquantity;
		$products->price = $request->productprice;
		$products->status = $request->productstats;
		 
		$saveprod = $products->save();

		if($saveprod){
			return true;
		}else{
			return false;
		}
    }


    public static function editProduct($id){

    	$products = Products_Model::find($id);

    	return $products;
    }




      public static function updateProduct($request){
    	$products = Products_Model::find($request->productid);
 
		$products->product_name = $request->productname;
		$products->product_description = $request->productdesc;
		$products->quantity = $request->productquantity;
		$products->price = $request->productprice;
		$products->status = $request->productstats;
		 
		$saveprod = $products->save();

		if($saveprod){
			return true;
		}else{
			return false;
		}
    }



    public static function deleteProduct($id){
    	$products = Products_Model::find($id);
		$deleteprod = $products->delete();

		if($deleteprod){
			return true;
		}else{
			return false;
		}
    }



}
