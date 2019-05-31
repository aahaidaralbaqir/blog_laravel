<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
   
    public function singleBlog($slug){
    	$singleBlog = DB::table("artikel")->where("slug","=",$slug)->get();
    	return view("singleBlog",["data" => $singleBlog]);
    }
    
}
