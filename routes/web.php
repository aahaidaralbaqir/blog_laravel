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

Route::get("/admin/blog","admin\blogController@index");
Route::get("/admin/blog/baru","admin\blogController@new");
Route::post("/admin/blog/simpan","admin\blogController@save");
Route::get("/admin/blog/hapus/{id_blog}","admin\blogController@delete");
Route::get("/admin/blog/ubah/{id_blog}","admin\blogController@edit");
Route::post("/admin/blog/ubah","admin\blogController@saveEdit");
Route::get('/logout', "authController@logout");