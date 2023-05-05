<?php

use App\Http\Controllers\AddcaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactControoler;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ProfileController ;
// use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('html.blogs');
});

Route::get('profile-edit',[ProfileController::class,'update']);
Route::get('profile',[ProfileController::class,'index']);
// Route::view('/profile/edit','html.edit-profile')->middleware('auth');


Route::resource('addcase',AddcaseController::class);

Route::get('contact',[ContactControoler::class,'index'])->name('contact.index');
Route::post('contact',[ContactControoler::class,'submit'])->name('contact.submit');


Route::resource('operation',OperationController::class);



Route::resource('blog',BlogController::class);


