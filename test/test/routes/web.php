<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Quran;


Route::get('/', [Quran::class , "getcontents"]);
Route::get('/read/{snum}', [Quran::class , "getcontentsDetails"]);



