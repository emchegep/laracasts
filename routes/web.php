<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dump(
        opcache_get_status()
    );
    return view('welcome');
});
