<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_Model extends Model
{
    protected $table = 'users_table';

    //Get Users Data
    public static function getData(){
    	$data = Users_Model::all();
    	return $data;
    }



     public function order(){
    	return $this->hasMany(Order_Model::class,'product_id','id');
    }

    //Save User
    public static function saveUser($request){
    	$user = new Users_Model;
 
		$user->first_name = $request->firstname;
		$user->last_name = $request->lastname;
		$user->email_address = $request->emailaddress;
		$user->mobile_number = $request->mobilenumber;
		$user->address = $request->address;
		$user->status = $request->userstats;
		 
		$saveuser = $user->save();

		if($saveuser){
			return true;
		}else{
			return false;
		}
    }


    //Edit User
     public static function editUser($id){

    	$user = Users_Model::find($id);

    	return $user;
    }


     //Update User
      public static function updateUser($request){
    	$users = Users_Model::find($request->userid);
 
		$users->first_name = $request->firstname;
		$users->last_name = $request->lastname;
		$users->email_address = $request->emailaddress;
		$users->mobile_number = $request->mobilenumber;
		$users->address = $request->address;
		$users->status = $request->userstats;
		 
		$saveusers = $users->save();

		if($saveusers){
			return true;
		}else{
			return false;
		}
    }


    //Delete User

    public static function deleteUser($id){
    	$users = Users_Model::find($id);
		$deleteuser = $users->delete();

		if($deleteuser){
			return true;
		}else{
			return false;
		}
    }






}
