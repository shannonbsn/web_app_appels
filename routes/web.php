<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $test = 2;

    return view('welcome');
});
