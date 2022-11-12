<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web'])->group(function(){
          //Route::view('/home','dashboard.user.home')->name('home');
          Route::get('/home',[PostController::class,'show'])->name('home');
          Route::get('/profileupdatee',[HomeController::class,'profileUpdatee'])->name('profileupdatee');
          Route::post('/profileupdate',[HomeController::class,'profileUpdate'])->name('profileupdate');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
       //Route::view('/home','dashboard.admin.home')->name('home');
        Route::get('/home',[AdminController::class,'UserList'])->name('home');
        //Route::get('/UUsers',[AdminController::class,'UserList'])->name('UUsers');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});





Route::resource('posts', PostController::class);

Route::get('/UserLink',[PostController::class,'user'])->name('UserLink');
Route::get('/Show',[PostController::class,'show'])->name('Show');
//Route::get('/UUsers',[AdminController::class,'UserList'])->name('UUsers');


Route::get('/share',[UserController::class,'share'])->name('share');



Route::get('/firas', function () {
    return view('firas');
});









