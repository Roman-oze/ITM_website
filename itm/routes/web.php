<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/',function(){
//     return view('welcome');
// });

Route::view('/home','frontend.home')->name('homepage');
Route::view('/program','frontend/program')->name('program');
Route::view('/faculty','frontend/faculty')->name('faculty');
Route::view('/event','frontend/event')->name('events');
Route::view('/about','frontend/about')->name('about');
Route::view('/club','frontend/club')->name('club');
Route::view('/membership','frontend/membership')->name('membership');
Route::view('/committee','frontend/committee')->name('committee');
Route::view('/upcoming','frontend/upcoming')->name('upcoming');
// Route::view('/create','frontend/create')->name('create');



Route::get('/index',[StudentController::class,'index'])->name('Homepage');
Route::get('/create', [StudentController::class, 'create']);
Route::get('/show',[StudentController::class,'show']);
Route::get('s/edit',[StudentController::class,'edit']);
