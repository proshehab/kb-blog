<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[FrontendController::class,'index'])->name('front.index');

Route::get('/single-post',[FrontendController::class,'single'])->name('front.single');
