<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 

class removeController extends Controller
{
    public function RemovePost(Request $request) {
     
       
        $id = $request->input('id_post');
        $name_file = DB::table('posts')
            ->select('image')
            ->where('id','=',$id)
            ->first(); 
        File::delete(public_path('photo/'.$name_file->image));
        DB::table('posts')->where('id', '=', $id)->delete();
        return redirect()->route('home'); 
    }
}
