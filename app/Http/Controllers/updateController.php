<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 


class updateController extends Controller
{
    public function updatePost(Request $request) {
        $id = $request->input('id_post'); 
        
        

        $title = $request->input('title');
        $teg = $request->input('tags');
        $describe = $request->input('describe');
        $new_name = ""; 
        if($request->hasFile('image')) {
            $name_file = DB::table('posts')
            ->select('image')
            ->where('id','=',$id)
            ->first(); 
            File::delete(public_path('photo/'.$name_file->image));
            $file = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $new_name = date("Y") ."_" .date("m") . "_" .date("d") . "_" .date("H_m_s") ."." .$extension;
            $file->move(public_path().'/photo',$new_name);     
        }
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['image'=>$new_name ], ['title' =>$title ], ['teg'=> $teg], ['describe'=>$describe]); 
        

        return redirect()->route('home'); 
    }

}
