<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'indexController@home');
Route::get('/blog/{slug}','blogController@singleBlog');
Route::get('/login',function(){
	return view('login');
});
Route::post("/register","authController@register");
Route::get('/register',function(){
	return view('register');
});
Route::post("/login","authController@login");
Route::get("/admin",function(){
	return view("admin/home");
});

Route::get("/admin/tutorial","tutorialController@index");


