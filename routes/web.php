<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClubController;
use Faker\Guesser\Name;

Route::controller(AdminController::class)->group(function(){

    Route::get('dashboard', 'index')->name('dashboard');
    Route::get('admin/login', 'admin_login')->name('admin_login');
    Route::get('admin/registration', 'admin_registration')->name('admin_registration');
    Route::get('admin/reset_password', 'password')->name('password');
    Route::get('admin/static', 'static')->name('static');
    Route::get('admin/chart', 'chart')->name('chart');
    Route::get('admin/users', 'u_admin')->name('user_admin');
    Route::get('user/students', 'u_student')->name('user_student');

});



 Route::controller(UserController::class)->group(function(){

// Route::get('user/profile', 'profile')->name('profile');
Route::get('users/login', 'login')->name('login');
Route::get('users/registration', 'registration')->name('registration');
// Route::get('admin/dashboard', 'admin')->name('admin');
Route::get('users', 'index')->name('user');
Route::post('/register', 'register')->name('register');
Route::get('/view/{id}', 'view')->name('view');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::put('/update/{id}','update')->name('update');
Route::delete('/delete/{id}', 'destroy')->name('delete');


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



Route::view('/home','frontend.home')->name('homepage');
Route::view('/program','frontend/program')->name('program');
Route::view('/faculty','frontend/faculty')->name('faculty');
Route::view('/event','frontend/event')->name('events');
Route::view('/about','frontend/about')->name('about');

 });



Route::controller(ClubController::class)->group(function(){

    Route::view('/club','club/club')->name('club');
    Route::view('/committee','club/committee')->name('committee');
    Route::view('/upcoming','club/upcoming')->name('upcoming');
    Route::get('/membership','membership')->name('membership');
});
