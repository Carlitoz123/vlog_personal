<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
//ENDPOINT
Route::get('/', function () {
    return view('welcome');
});
RoutE::get("/contact", function(){ 
    return view('contact');
});
RoutE::get("/post", function(){ 
    return view('post');
});
RoutE::get("/about", function(){ 
    return view('about');
});

    Route::group(['prefix'=>'dashboard'],function(){

    RoutE::get("/", function(){ 
        return view('admin.dashboard');
    }); 
    RoutE::get("/users",[UsersController::class,'getUsers']);
    RoutE::post("/users",[UsersController::class,'createUsers']);


});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
