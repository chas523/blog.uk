<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Posts; 
use Illuminate\Support\Facades\DB;

class MoreContoller extends Controller
{
    public function more(Request $request) {
        $post =  new Posts; 
        //$users = DB::select('select title from posts where id = 1');
        //return gettype($users);
        return  view('home', ['posts' => Posts::all()]);
        //return var_dump($users);

        // return view('home' , ['posts'=> Posts::all() ]);
        
    }    
}
