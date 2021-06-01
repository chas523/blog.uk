<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Posts; 


class PostsContoller extends Controller
{
    public function addPost(Request $request) {
        if($request->isMethod('post')){
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $request->file('image')->getClientOriginalName();
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $new_name = date("Y") ."_" .date("m") . "_" .date("d") . "_" .date("H_m_s") ."." .$extension;
                $file->move(public_path().'/photo',$new_name); 
                //
                $data = new Posts();
                $data->image = $new_name; 
                $data->title = $request->input('title');
                $data->teg = $request->input('tags');
                $data->describe = $request->input('describe');
                $data->save(); 
            }
        }  
        return redirect()->route('home'); 
    }
}
