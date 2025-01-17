<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GreetController;

Route::get('/',function (){
    return 'hello,hakdog';
});

Route::get('/greet', [GreetController::class, 'page']);