<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
class tutorialController extends Controller
{
    public function index(){
    	$data = DB::table("artikel")->get();
    	return view("admin/tutorial",["data" => $data]);
    }
}
