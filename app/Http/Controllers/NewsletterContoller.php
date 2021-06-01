<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Newsletter; 
use Illuminate\Support\Facades\DB;

class NewsletterContoller extends Controller
{
    public function SendEmail(Request $request) {
        $email = $request->input('email');  
        $sql = DB::select('select email from newsletters where email = ?',[$email]); 
        if ($sql == NULL) {
           $newsletters = new Newsletter(); 
           $newsletters->email = $request->input('email'); 
           $newsletters->save(); 
        } 
        return redirect()->route('home'); 
    }
    
}
