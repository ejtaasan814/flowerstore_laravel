<?php

namespace App\Http\Controllers;
use App\Models\Users_Model;
use Illuminate\Http\Request;

class Users_Controller extends Controller
{
    //Get Users Data
    public function users(){

    	session()->put('nav','users');
    	$data['users'] = Users_Model::getData();
   		return view('users',$data);

    }

     //Save User
    public function saveUser(Request $request){
    	$save  = Users_Model::saveUser($request);

    	if($save){
    		return back()->with('success_msg','User Added successfully!');
    	}else{
    		return back()->with('error_msg','Error!');
    	}


    }



    //Edit User
    public function editUser($id){

    	$data['user'] = Users_Model::editUser($id);

    	return view('edituser',$data);

    }



   
    //Update User
    public function updateUser(Request $request){

    	$save  = Users_Model::updateUser($request);

    	if($save){
    		 return back()->with('success_msg','User Updated successfully!');
    	}else{
    		return back()->with('error_msg','Error!');
    	}
    }




    //Delete User
    public function deleteUser($id){

    	$delete = Users_Model::deleteUser($id);

    	if($delete){
    		 return back()->with('success_msg','User Deleted successfully!');
    	}else{
    		return back()->with('error_msg','Error!');
    	}

    }



    

}
