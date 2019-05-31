<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
	  public function index(){
	    if(!Session::get('login')){
	        return redirect('login')->with('alert','Kamu harus login dulu');
	    }
	    else{
	        return redirect('admin');
	    }
	  }
    public function register(Request $request){
    	
    	$validator  = Validator::make($request->all(), [
    		'username' => "required|max:50",
    		'password' => "required"
    	]);

    	if($validator->fails()) {
    		return redirect("register")
    			   ->withErrors($validator)
    			   ->withInput();
    	}

    	$username = $request->input("username");
    	$password = bcrypt($request->input('password'));

    	DB::table("admin")->insert(
    		["username" => $username, "pasword" => $password]
    	);
    	return back()
    			->withSuccess("You have been registered")
    			->withInput();
    }

    public function login(Request $request){
    	$this->validate($request,[
    		"username" => "required",
    		"password" => "required"
    	]);
		
		$username = $request->input("username");
		$password = $request->input("password");
		$data = DB::table("admin")->where("username",$username)->first();
		if($data){
            if (Hash::check($password, $data->pasword)) {
   				Session::put('nama',$data->username);
                Session::put('login',TRUE);
                return redirect('admin');
			}else{
                return redirect('login')->with('password','Password Salah !');
            }
		}else{
                return redirect('login')->with('username','Username Salah !');
		}    	 
    }
}
