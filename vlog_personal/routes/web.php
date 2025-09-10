<?php

use Illuminate\Support\Facades\Route;
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
RoutE::get("/dashboard", function(){ 
    return view('admin.dashboard');
});
