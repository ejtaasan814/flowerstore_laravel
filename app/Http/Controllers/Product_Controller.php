<?php

namespace App\Http\Controllers;
use App\Models\Products_Model;
use Illuminate\Http\Request;

class Product_Controller extends Controller
{
    //Product Page
    public function index(){
        session()->put('nav','product');
        $data['products'] = Products_Model::getData();
        

    	return view('index',$data);
    }


    //Save Product
    public function saveProduct(Request $request){
    	$save  = Products_Model::saveProduct($request);

    	if($save){
    		return back()->with('success_msg','Product Added successfully!');
    	}else{
    		return back()->with('error_msg','Error!');
    	}


    }


    //Edit Product
    public function editProduct($id){

    	$data['product'] = Products_Model::editProduct($id);

    	return view('editproduct',$data);

    }


    //Update Product
    public function updateProduct(Request $request){

    	$save  = Products_Model::updateProduct($request);

    	if($save){
    		 return back()->with('success_msg','Product Updated successfully!');
    	}else{
    		return back()->with('error_msg','Error!');
    	}
    }



    //Delete Product
    public function deleteProduct($id){

    	$delete = Products_Model::deleteProduct($id);

    	if($delete){
    		 return back()->with('success_msg','Product Deleted successfully!');
    	}else{
    		return back()->with('error_msg','Error!');
    	}

    }

   
}
