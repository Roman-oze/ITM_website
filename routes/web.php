<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\RelationalController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\StaffController;

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

route::controller(UserController::class)->group(function(){

    Route::get('/users', 'index')->name('users');
    Route::post('/users', 'store')->name('store.user');
    Route::get('/users/create', 'create')->name('create.user');
    Route::get('/users/show/{id}', 'show')->name('show.user');
    Route::get('/users/edit/{id}', 'edit')->name('edit.user');
    Route::put('/users/update/{id}', 'update')->name('update.user');
    Route::delete('users/delete/{id}', 'destroy')->name('user.delete');
    Route::get('/users/search','search')->name('search.user');

});


// protected

// Route::get('/profile',function(){
//     return "Welcome to your profile";
// })->middleware('guard');

// Route::get('/user',function(){
//     return "Welcome to your user profile";
// })->middleware('guard');

// Route::get('/logins',function(){
//    session()->put('id',1);
//    return redirect()->route('dashboard');
// });
// Route::get('/no-access',function(){
//     echo "You're not to be access page";
//     die;
// });




route::controller(LoginController::class)->group(function(){
    Route::get('user/login', 'login')->name('login');
    Route::post('loginUser', 'loginUser')->name('loginUser');
});

route::controller(RegisterController::class)->group(function(){
    Route::get('user/register', 'register')->name('register');
});



route::controller(MessageController::class)->group(function(){
    route::post('/viewer/message','store')->name('viwer.store');
    route::get('/message','index')->name('index.message');
    route::delete('/inbox/{id}','destroy')->name('inbox.delete');


});

route::controller(RelationalController::class)->group(function(){
    route::get('/relation', 'index')->name('index');
    route::get('/member', 'member')->name('member');
    route::get('/group', 'group')->name('group');

});

 Route::controller(FacultyController::class)->group(function(){

    Route::get('/faculty/member','member')->name('faculty.member');
    Route::get('/faculty/create','create')->name('create.faculty');
    Route::get('/dashboard/faculty','index')->name('dashboard.faculty');
    Route::post('/faculty/store', 'store')->name('faculty.store');
    Route::get('/faculty/edit/{id}', 'edit')->name('edit.faculty');
    Route::put('/faculty/update/{id}', 'update')->name('update.faculty');
    Route::delete('/faculty/delete/{id}', 'destroy')->name('delete.faculty');
    route::get('/faculty/searching','search')->name('faculty.search');


  //   Route::get('teachers','teachers')->name('teachers');

   });

Route::controller(EventController::class)->group(function(){

    Route::get('/events','events')->name('events');
    Route::get('dashboard/event', 'index')->name('dashboard.event');
    Route::get('event/create', 'create')->name('event/create');
    route::post('event_store','event_store')->name('event_store');
    route::get('event_show/{id}','show')->name('event_show');
    route::get('/event_edit/{id}','edit')->name('event_edit');
    route::put('event_update/{id}','event_update')->name('event_update');
    route::delete('event_delete/{id}','destroy')->name('event_delete');



});

Route::controller(RoutineController::class)->group(function(){

    route::get('/semester/routine','routine')->name('semester.routines');
    route::get('dashboard/routine','index')->name('dashboard.routines');
    route::get('/routine/create','create')->name('routine.create');
    route::post('/routine/store','store')->name('routine.store');
    route::get('/routine/edit/{id}','edit')->name('routine.edit');
    route::put('/routine/update/{id}','update')->name('routine.update');
    route::delete('/routine/delete/{id}','destroy')->name('routine.delete');
    route::get('routine/download/{id}','download')->name('download');

});




Route::controller(AuthController::class)->group(function(){

    Route::get('dashboard', 'dashboard')->name('dashboard');
    // Route::get('user/login', 'login')->name('login');
    // Route::post('loginUser', 'loginUser')->name('loginUser');

    Route::get('logout', 'logout')->name('logout');
    Route::get('user/reset_password', 'password')->name('reset_password');

})->middleware('guard');





Route::controller(AdminController::class)->group(function(){

    Route::get('user', 'user')->name('admin.user');
    Route::get('admin/show/{id}', 'show')->name('show');
    Route::get('admin/edit/{id}', 'edit')->name('admin.edit');
    Route::put('admin/update/{id}','update')->name('admin.update');
    Route::delete('admin/delete/{id}', 'destroy')->name('admin.delete');




});





 Route::controller(AlumniController::class)->group(function(){
    Route::get('Admission/alumni', 'alumni')->name('alumni');

    Route::get('/dashboard/alumni', 'index')->name('dashboard.alumni');
    Route::get('/alumni/create', 'create')->name('create.alumni');
    Route::post('/alumni/store', 'store')->name('alumni.store');
    Route::get('/alumni/edit/{id}', 'edit')->name('edit.alumni');
    Route::put('/alumni/update/{id}', 'update')->name('update.alumni');
    Route::delete('/alumni/delete/{id}', 'destroy')->name('delete.alumni');

 });


 Route::controller(ScholarshipController::class)->group(function(){

    Route::get('/dashboard/scholarship', 'index')->name('dashboard.scholarship');
    Route::get('/scholarship/create', 'create')->name('create.scholarship');
    Route::post('/scholarship/store', 'store')->name('store.scholarship');
    Route::get('/scholarship/edit/{id}', 'edit')->name('edit.scholarship');
    Route::put('/scholarship/update/{id}', 'update')->name('update.scholarship');
    Route::delete('/scholarship/delete/{id}', 'destroy')->name('delete.scholarship');

 });

 Route::controller(StudentController::class)->group(function(){

Route::get('/dashboard/students', 'index')->name('dashboard.index');
Route::get('/student/create', 'create')->name('create');
Route::post('/student', 'store')->name('student.store');
Route::get('/student/show/{id}', 'show')->name('student.show');
Route::get('/student/edit/{id}', 'edit')->name('student.edit');
Route::put('/student/update/{id}','update')->name('student.update');
Route::delete('student/delete/{id}', 'destroy')->name('delete');
Route::get('/student/search','search')->name('student.search');
Route::get('student/login', 'sign_in')->name('sign_in');






 });

 Route::controller(StatsController::class)->group(function(){

    Route::get('/chart','chart')->name('chart');
    Route::get('/static','static')->name('static');

});


Route::controller(StaffController::class)->group(function(){

    route::get('/staff/index','index')->name('staff.index');
    // Route::get('/faculty/member','staff')->name('faculty.member');
    route::get('/staff/create','create')->name('staff.create');
    route::post('store','store')->name('staff.store');
    route::get('staff/edit/{id}','edit')->name('staff.edit');
    route::put('staff/update/{id}','update')->name('staff.update');
    route::delete('staff/delete/{id}','destroy')->name('staff.delete');

});


route::controller(AdmissionController::class)->group(function(){
    route::get('/local_tuition','Local_tuition')->name('Local_tuition');
    route::get('/international_tuition','international_tuition')->name('international_tuition');
    route::get('/admission_eligibility','admission_eligibility')->name('admission_eligibility');
});



route::get('/',[HomeController::class,'home'])->name('home');
route::get('/program',[ProgramController::class,'program'])->name('program');
route::get('/about',[AboutController::class,'about'])->name('about');


Route::controller(ClubController::class)->group(function(){

    Route::view('/club','club/club')->name('club');
    Route::view('/committee','club/committee')->name('committee');
    Route::view('/upcoming','club/upcoming')->name('upcoming');
    Route::get('/membership','membership')->name('membership');
});
