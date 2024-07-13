<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\FacultyController;
use App\Http\Middleware\Itm;

use Faker\Guesser\Name;
// use Illuminate\Support\Facades\Auth;


// Route::controller(AdminController::class)->middleware('guard')->group(function(){

//      Route::get('dashboard', 'dashboard')->name('dashboard');
//     Route::get('admin/login', 'login')->name('admin_login');
// });


// Route::get('/admin_login',function(){
//     session()->put('id',1);
//     return redirect()->route('dashboard');

// });

// Route::get('/logout',function(){
//     session()->forget('id');
//     return redirect('/');

// });

//  Route::get('/no-access',function(){
//     echo"you're not to access this page";
//     die;

//  });

 Route::controller(FacultyController::class)->group(function(){
    Route::get('/faculty/create','create')->name('faculty.create');
    Route::get('/admin/index','index')->name('faculty.index');
    Route::get('/faculty/member','member')->name('faculty.member');
    Route::get('/faculty/create','create')->name('faculty/create');
    Route::post('/faculty_store', 'store')->name('faculty.store');
    Route::get('/faculty_edit/{id}', 'edit')->name('faculty_edit');
    Route::post('/faculty_update/{id}', 'faculty_update')->name('faculty_update');
    Route::delete('/faculty_delete/{id}', 'destroy')->name('faculty_delete');
  //   Route::get('teachers','teachers')->name('teachers');




   });

Route::controller(EventController::class)->group(function(){

    Route::get('/events','events')->name('events');
    Route::get('admin/event', 'index')->name('admin.event');
    Route::get('event/create', 'create')->name('event/create');
    route::post('event_store','event_store')->name('event_store');
    route::get('event_show/{id}','show')->name('event_show');
    route::get('/event_edit/{id}','edit')->name('event_edit');
    route::put('event_update/{id}','event_update')->name('event_update');
    route::delete('event_delete/{id}','destroy')->name('event_delete');



});

Route::controller(RoutineController::class)->group(function(){

    route::get('/admin/index','index')->name('routine.index');
    route::get('/routine/create','create')->name('routine.create');
    route::post('/routine/store','store')->name('routine.store');
    route::get('/routine/edit/{id}','edit')->name('routine.edit');
    route::put('/routine/update/{id}','update')->name('routine.update');
    route::delete('/routine/delete/{id}','destroy')->name('routine.delete');
    route::get('/download{file}','download')->name('download');

});




Route::controller(AuthController::class)->group(function(){

    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('user/login', 'login')->name('login');
    Route::post('loginUser', 'loginUser')->name('loginUser');
    Route::get('user/registration', 'registration')->name('registration');
    Route::post('register', 'register')->name('register');
    Route::get('logout', 'logout')->name('logout');
    Route::get('user/reset_password', 'password')->name('reset_password');

});





Route::controller(AdminController::class)->group(function(){

    Route::get('admin/static', 'static')->name('static');
    Route::get('admin/chart', 'chart')->name('chart');
    Route::get('records', 'records')->name('records');

    Route::get('user', 'user')->name('admin.user');
    Route::get('admin/show/{id}', 'show')->name('show');
    Route::get('admin/edit/{id}', 'edit')->name('admin.edit');
    Route::put('admin/update/{id}','update')->name('admin.update');
    Route::delete('admin/delete/{id}', 'destroy')->name('admin.delete');

    Route::view('/home','frontend.home')->name('homepage');
    Route::view('/program','frontend/program')->name('program');
    Route::view('/about','frontend/about')->name('about');



});





 Route::controller(StudentController::class)->group(function(){

Route::get('students', 'index')->name('index');
Route::get('student/create', 'create')->name('create');
Route::get('student/login', 'sign_in')->name('sign_in');
Route::post('/store', 'store')->name('store');
Route::get('/show/{id}', 'show')->name('student_show');
Route::get('/edit/{id}', 'edit')->name('student_edit');
Route::put('/update/{id}','update')->name('student_update');
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
