<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Faker\Guesser\Name;

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

Route::get('/',function(){
    return view('welcome');
});

Route::view('/home','frontend.home')->name('homepage');
Route::view('/program','frontend/program')->name('program');
Route::view('/faculty','frontend/faculty')->name('faculty');
Route::view('/event','frontend/event')->name('events');
Route::view('/about','frontend/about')->name('about');
Route::view('/club','frontend/club')->name('club');
Route::view('/membership','frontend/membership')->name('membership');
Route::view('/committee','frontend/committee')->name('committee');
Route::view('/upcoming','frontend/upcoming')->name('upcoming');


// Route::controller(StudentController::class)->group(function(){

// Route::get('/index','index')->name('Homepage');
// Route::get('/create','create')->name('create');
// Route::post('/store','store')->name('store');
// Route::get('/show','show')->name('show');
// Route::get('/edit','edit')->name('edit');
// Route::get('/delete','destroy')->name('delete');

// });

Route::get('/index',['StudentController'],'index')->name('Homepage');
Route::get('/create',['StudentController'],'create')->name('create');
Route::post('/store',['StudentController'],'store')->name('store');