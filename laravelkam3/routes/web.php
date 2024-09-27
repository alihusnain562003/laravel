<?php

use App\Http\Controllers\Quranindex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/quran', [Quranindex::class, "getContents"]);
