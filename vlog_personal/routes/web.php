<?php

use Illuminate\Support\Facades\Route;
//ENDPOINT
Route::get('/', function () {
    return view('welcome');
});
RoutE::get("/contacto", function(){ 
    return view('contacto');
});
