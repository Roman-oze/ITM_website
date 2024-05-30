<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\FacultyController;
use Faker\Guesser\Name;
// use Illuminate\Support\Facades\Auth;

Route::controller(AdminController::class)->group(function(){

    Route::get('dashboard', 'index')->name('dashboard');
    Route::get('admin/login', 'login')->name('admin_login');
    Route::get('admin/registration', 'registration')->name('admin_registration');
    Route::get('admin/reset_password', 'password')->name('reset_password');
    Route::get('users', 'user_admin')->name('user_admin');
    Route::get('admin/static', 'static')->name('static');
    Route::get('admin/chart', 'chart')->name('chart');
    Route::get('admin/routine', 'routine')->name('routine');
    Route::get('records', 'records')->name('records');

    // Route::get('user/profile', 'profile')->name('profile');
    Route::post('/register', 'register')->name('register');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');

    Route::view('/home','frontend.home')->name('homepage');
    Route::view('/program','frontend/program')->name('program');
    Route::view('/faculty','frontend/faculty')->name('faculty');
    Route::view('/event','frontend/event')->name('events');
    Route::view('/about','frontend/about')->name('about');



});



 Route::controller(FacultyController::class)->group(function(){
  Route::get('main','main')->name('main');
  Route::get('/showing','showing')->name('showing');
  Route::get('/teacher_create','create')->name('teacher_create');
  Route::post('/faculty_store', 'faculty_store')->name('faculty_store');
  Route::get('/faculty_edit/{id}', 'edit')->name('faculty_edit');
  Route::post('/faculty_update/{id}', 'faculty_update')->name('faculty_update');
  Route::delete('/faculty_delete/{id}', 'destroy')->name('faculty_delete');



 });



 Route::controller(StudentController::class)->group(function(){

Route::get('students', 'index')->name('index');
Route::get('student/create', 'create')->name('create');
Route::get('student/login', 'sign_in')->name('sign_in');
Route::post('/store', 'store')->name('store');
Route::get('/show/{id}', 'show')->name('show');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::put('/update/{id}','update')->name('update');
Route::delete('/delete/{id}', 'destroy')->name('delete');
Route::get('search','search')->name('search');





 });



Route::controller(ClubController::class)->group(function(){

    Route::view('/club','club/club')->name('club');
    Route::view('/committee','club/committee')->name('committee');
    Route::view('/upcoming','club/upcoming')->name('upcoming');
    Route::get('/membership','membership')->name('membership');
});







//Route::controller(UserController::class)->group(function(){

    // // Route::get('user/profile', 'profile')->name('profile');
    // Route::get('users/login', 'login')->name('login');
    // Route::get('users/registration', 'registration')->name('registration');
    // // Route::get('admin/dashboard', 'admin')->name('admin');
    // Route::get('users', 'index')->name('user');
    // Route::post('/register', 'register')->name('register');
    // Route::get('/view/{id}', 'view')->name('view');
    // Route::get('/edit/{id}', 'edit')->name('edit');
    // Route::put('/update/{id}','update')->name('update');
    // Route::delete('/delete/{id}', 'destroy')->name('delete');


    //  });
