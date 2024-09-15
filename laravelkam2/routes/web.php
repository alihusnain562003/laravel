<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/intro', function () {
    return view('introduction');
});



Route::get('/month', function () {
    return view('month');
});

Route::get('/marksheet/{username}/eng/{english}/ur/{urdu}/math/{maths}', function ($name, $english, $urdu, $maths) {


    $data = compact('name', "english", 'urdu', "maths");
    return view('marks')->with($data);
});












