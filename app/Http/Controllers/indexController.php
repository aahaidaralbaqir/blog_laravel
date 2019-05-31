<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{
    public function home(){
        $blog = DB::table("artikel")->get();
        return view("home",["blog" => $blog]);
    }
}
