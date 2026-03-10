<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about.index',["name"=>"JSS"]);
});


Route::get('/teas', function () {
    $teas = [
        ["name"=>"Green Tea", "price"=>10,
        "id"=>1],
        ["name"=>"Black Tea", "price"=>1,
        "id"=>2],
        ["name"=>"Oolong Tea", "price"=>20,
        "id"=>3],
    ];
    return view('teas.index',["teas"=>$teas]);
});



Route::get('/teas/{id}', function ($id) {
    $teas = [
        ["name"=>"Green Tea", "price"=>10,
        "id"=>1],
        ["name"=>"Black Tea", "price"=>1,
        "id"=>2],
        ["name"=>"Oolong Tea", "price"=>20,
        "id"=>3],
    ];
    return view('teas.teadetail',["tea"=>$teas[$id-1]]);

});
