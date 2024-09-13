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

Route::get('/marksheet/{username}/{userid?}/{english}/{urdunumber}/{mathsnumber}', function ($username, $userid = null, $english, $urdu, $maths) {
    $english = (int)$english;
    $urdu = (int)$urdu;
    $maths = (int)$maths;


    $total = $english + $urdu + $maths;

    $maxScore = 300; 
    $percentage = ($total / $maxScore) * 100;


    echo "Name: " . $username . "<br>";
    echo "ID: " . $userid . "<br>";
    echo "English: " . $english . "<br>";
    echo "Urdu: " . $urdu . "<br>";
    echo "Maths: " . $maths . "<br>";
    echo "Total: " . $total . "<br>";
    echo "Percentage: " .$percentage. "%";
});












