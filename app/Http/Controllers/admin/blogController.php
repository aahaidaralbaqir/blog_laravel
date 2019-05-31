<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;


class blogController extends Controller
{
    public function index(){
    	$data = DB::table("artikel")->get();
    	return view("admin/blog",["data" => $data]);
    }
    public function new(){
        return view("admin/newblog");
    }
    public function save(Request $request){
        
    	$validator  = Validator::make($request->all(), [
    		'judul' => "required|max:50",
            'isi' => "required",
            'gambar' => "required|file|image|mimes:jpeg,png,jpg|max:2048"
    	]);

    	if($validator->fails()) {
    		return redirect("/admin/blog/baru")
    			   ->withErrors($validator)
    			   ->withInput();
    	}

        $judul = $request->input("judul");
        $isi = $request->input("isi");
        $file = $request->file("gambar");
        $slug = str_slug($judul,"-");
        $nameFile = time()."_".$file->getClientOriginalName();
        $dir = "upload";
        
        $file->move($dir,$nameFile);

        DB::table("artikel")->insert([
            "slug" => $slug , "judul" => $judul, "isi" => $isi,"gambar" => $nameFile 
        ]);

        return back()
                ->withSuccess("Data have been insereted")
                ->withInput();
    }
    public function delete($id_blog){
        $image = DB::table("artikel")->where("id_artikel",$id_blog)->first();
        $destination_path =public_path("img");
        $file = $image->gambar;
        if(file_exists($destination_path.$file)){
            File::delete($destination_path.$file);
        }
        DB::table("artikel")->where("id_artikel",$id_blog)->delete();
        
        return back()
                ->withSuccess("Data have been deleted");
    }
    public function edit($id_blog){
        $data = DB::table("artikel")->where("id_artikel",$id_blog)->first();
        return view("admin/editblog",["data" => $data]);
    }
    public function saveEdit(Request $request){
        $id_artikel = $request->input("id_artikel");
        $judul = $request->input("judul");
        $isi  = $request->input("isi");
        $cek = $request->input("gantiGambar");
        $slug = str_slug($judul,"-");
        if($cek){
            $image = DB::table("artikel")->where("id_artikel",$id_artikel)->first();
            $destination_path =public_path("img");
            $fileWillDelete = $image->gambar;
            if(file_exists($destination_path.$fileWillDelete)){
                File::delete($destination_path.$fileWillDelete);
            }
            $gambar = $request->file("gambar");
            $nameFile = time()."_".$gambar->getClientOriginalName();
            $dir = "upload";
            
            $gambar->move($dir,$nameFile);
    
            DB::table("artikel")->where('id_artikel',$id_artikel)->update(["slug" => $slug , "judul" => $judul, "isi" => $isi,"gambar" => $nameFile ]);
 
        }else{
            DB::table("artikel")->where('id_artikel',$id_artikel)->update(["slug" => $slug , "judul" => $judul, "isi" => $isi ]);

        }
           
        return redirect('/admin/blog')
        ->withSuccess("Data have been updated")
        ->withInput();
    }
}
