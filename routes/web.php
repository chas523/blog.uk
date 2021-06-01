<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterContoller;
use App\Http\Controllers\PostsContoller; 
use App\Http\Controllers\MoreContoller; 
use App\Http\Controllers\removeController;
use  App\Http\Controllers\updateController; 
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



// Route::get('/home', function() {
//     return view('home');
// })->name('home'); 



Route::get('/addPost',function() {
    return view('addPosts'); 
})->name('addPost'); 


Route::get('/',[MoreContoller::class, 'more'])->name('home'); 
Route::post('/send_email',[NewsletterContoller::class , 'SendEmail'])->name('send_email'); 
Route::post('/addPost',[PostsContoller::class, 'addPost'])->name('addPost'); 
Route::post('/remove',[removeController::class, 'RemovePost']);  
Route::post('/update',[updateController::class, 'updatePost']); 