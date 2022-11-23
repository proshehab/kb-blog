<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


//Route::get('/',[FrontendController::class,'index'])->name('front.index');

//Route::get('/single-post',[FrontendController::class,'single'])->name('front.single');


// Front End Routes
Route::get('/', [FrontEndController::class,'home'])->name('website');
Route::get('/about', [FrontEndController::class,'about'])->name('website.about');
Route::get('/category/{slug}', [FrontEndController::class,'category'])->name('website.category');
Route::get('/tag/{slug}', [FrontEndController::class,'tag'])->name('website.tag');
Route::get('/contact', [FrontEndController::class,'contact'])->name('website.contact');
Route::get('/post/{slug}', [FrontEndController::class,'post'])->name('website.post');

Route::post('/contact', [FrontEndController::class,'send_message'])->name('website.contact');

// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    //Route::get('/',['DashboardController::class,'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::resource('user', UserController::class);
    Route::get('/profile', [UserController::class,'profile'])->name('user.profile');
    Route::post('/profile', [UserController::class,'profile_update'])->name('user.profile.update');
    
    // setting
    Route::get('setting', [SettingController::class,'edit'])->name('setting.index');
    Route::post('setting', [SettingController::class,'update'])->name('setting.update');

    // Contact message
    Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
    Route::get('/contact/show/{id}', [ContactController::class,'show'])->name('contact.show');
    Route::delete('/contact/delete/{id}', [ContactController::class,'destroy'])->name('contact.destroy');
});
