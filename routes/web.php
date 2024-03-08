<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Faker\Guesser\Name;



 Route::controller(StudentController::class)->group(function(){


Route::view('/home','frontend.home')->name('homepage');
Route::view('/program','frontend/program')->name('program');
Route::view('/faculty','frontend/faculty')->name('faculty');
Route::view('/event','frontend/event')->name('events');
Route::view('/about','frontend/about')->name('about');
Route::view('/club','frontend/club')->name('club');
Route::view('/committee','frontend/committee')->name('committee');
Route::view('/upcoming','frontend/upcoming')->name('upcoming');
Route::get('/membership','membership')->name('membership');

Route::get('students', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/show/{id}', 'show')->name('show');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::put('/update/{id}','update')->name('update');
Route::delete('/delete/{id}', 'destroy')->name('delete');


 });
// Route::controller(StudentController::class)->group(function(){

// Route::get('/index','index')->name('Homepage');
// Route::get('/create','create')->name('create');
// Route::post('/store','store')->name('store');
// Route::get('/show','show')->name('show');
// Route::get('/edit','edit')->name('edit');
// Route::get('/delete','destroy')->name('delete');

// });

// Route::get('/create', [StudentController::class, 'create']);
// Route::post('/store', [StudentController::class, 'store']);
// Route::post('/create',[StudentController::class,'create'])->name('create');
// Route::post('/store',[StudentController::class,'store'])->name('store');
// Route::post('/show',[StudentController::class,'show'])->name('show');
