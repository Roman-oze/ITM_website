<?php
use Faker\Guesser\Name;
use App\Http\Middleware\Itm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\HerosectionController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\MenuPermissionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;








route::get('/dashboard',[DashbaordController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::group(['middleware' => ['isAdmin']],function(){

route::resource('permissions',App\Http\Controllers\PermissionController::class);
route::get('permissions/{id}/delete',[App\Http\Controllers\PermissionController::class,'destroy']);

route::resource('roles',App\Http\Controllers\RoleController::class);
route::get('roles/{roleId}/delete',[App\Http\Controllers\RoleController::class,'destroy']);
// ->middleware('permission:delete role');

route::get('roles/{roleId}/give-permission',[App\Http\Controllers\RoleController::class,'addPermissionToRole']);
route::put('roles/{roleId}/give-permission',[App\Http\Controllers\RoleController::class,'updatePermissionToRole']);

route::resource('users',UserController::class);
route::get('users/{userId}/delete',[App\Http\Controllers\UserController::class,'destroy']);

});

// Super Admin Routes
// Route::group(['middleware' => ['role:super-admin']], function () {

//     // Permissions Management
//     Route::resource('permissions', PermissionController::class);
//     Route::get('permissions/{id}/delete', [PermissionController::class, 'destroy'])->name('permissions.delete');

//     // Roles Management
//     Route::resource('roles', RoleController::class);
//     Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy'])->name('roles.delete');
//     Route::get('roles/{roleId}/give-permission', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permission');
//     Route::put('roles/{roleId}/give-permission', [RoleController::class, 'updatePermissionToRole'])->name('roles.update-permission');

//     // Users Management
//     Route::resource('users', UserController::class);
//     Route::get('users/{userId}/delete', [UserController::class, 'destroy'])->name('users.delete');
//     Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
//     route::get('/dashboard',[DashbaordController::class,'dashboard'])->name('dashboard');    // Additional faculty routes can be added here

// });

// // Admin Routes
// Route::group(['middleware' => ['role:admin']], function () {

//     // Admin can manage roles but cannot delete them
//     Route::resource('roles', RoleController::class)->except(['destroy']);
//     Route::get('roles/{roleId}/give-permission', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permission');
//     Route::put('roles/{roleId}/give-permission', [RoleController::class, 'updatePermissionToRole'])->name('roles.update-permission');

//     // Admin can manage users but cannot delete them
//     Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'show']);
//     Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
//     route::get('/dashboard',[DashbaordController::class,'dashboard'])->name('dashboard');    // Additional faculty routes can be added here

// });

// // Faculty Routes
// Route::group(['middleware' => ['role:faculty']], function () {

//     // Faculty-specific routes (example: faculty dashboard)
//     route::get('/dashboard',[DashbaordController::class,'dashboard'])->name('dashboard');    // Additional faculty routes can be added here
// });




// route::get('/users/search',[App\Http\Controllers\UserController::class,'search'])->name('search.user');

// Route::middleware(['super-admin'])->group(function () {
//     Route::resource('permissions', PermissionController::class);
//     Route::get('permissions/{id}/delete', [PermissionController::class, 'destroy']);

//     Route::resource('roles', RoleController::class);
//     Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
//     Route::get('roles/{roleId}/give-permission', [RoleController::class, 'addPermissionToRole']);
//     Route::put('roles/{roleId}/give-permission', [RoleController::class, 'updatePermissionToRole']);
// });

// Route::middleware(['admin'])->group(function () {
//     Route::resource('users', UserController::class);
//     Route::get('users/{userId}/delete', [UserController::class, 'destroy']);
//     Route::get('/users/search', [UserController::class, 'search'])->name('search.user');
// });

// Route::middleware(['faculty'])->group(function () {
//     route::get('/dashboard',[DashbaordController::class,'dashboard']);
// });
// Route::group(['middleware' => ['role:admin']], function () {

// route::resource('permissions',App\Http\Controllers\PermissionController::class);
// route::get('permissions/{id}/delete',[App\Http\Controllers\PermissionController::class,'destroy']);

// route::resource('roles',App\Http\Controllers\RoleController::class);
// route::get('roles/{roleId}/delete',[App\Http\Controllers\RoleController::class,'destroy'])->middleware('permission');

// route::get('roles/{roleId}/give-permission',[App\Http\Controllers\RoleController::class,'addPermissionToRole']);
// route::put('roles/{roleId}/give-permission',[App\Http\Controllers\RoleController::class,'updatePermissionToRole']);

// route::resource('users',UserController::class);
// route::get('users/{userId}/delete',[App\Http\Controllers\UserController::class,'destroy']);
// route::get('/users/search',[App\Http\Controllers\UserController::class,'search'])->name('search.user');

// });


// Route::resource('permissions', PermissionController::class)->middleware('permission:view-permissions');
// Route::get('permissions/{id}/delete', [PermissionController::class, 'destroy'])->middleware('permission:delete-permissions');

// Route::resource('roles', RoleController::class);
// Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy'])->middleware('permission:delete-roles');

// Route::get('roles/{roleId}/give-permission', [RoleController::class, 'addPermissionToRole'])->middleware('permission:manage-roles');
// Route::put('roles/{roleId}/give-permission', [RoleController::class, 'updatePermissionToRole'])->middleware('permission:manage-roles');

// Route::resource('users', UserController::class)->middleware('permission:view-users');
// Route::get('users/{userId}/delete', [UserController::class, 'destroy'])->middleware('permission:delete-users');
// Route::get('/users/search', [UserController::class, 'search'])->name('search.user')->middleware('permission:search-users');



// Route::group(['middleware' => ['role:super-admin']], function () {

//     Route::resource('permissions', PermissionController::class);
//     Route::get('permissions/{id}/delete', [PermissionController::class, 'destroy'])->name('permissions.delete');

//     Route::resource('roles', RoleController::class);
//     Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy'])->middleware('permission')->name('roles.delete');
//     Route::get('roles/{roleId}/give-permission', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permission');
//     Route::put('roles/{roleId}/give-permission', [RoleController::class, 'updatePermissionToRole'])->name('roles.update-permission');

//     Route::resource('users', UserController::class);
//     Route::get('users/{userId}/delete', [UserController::class, 'destroy'])->name('users.delete');
//     Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
// });

// Route::group(['middleware' => ['role:admin']], function () {

//     Route::resource('roles', RoleController::class)->except(['destroy']); // Admin cannot delete roles
//     Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'show']); // Admin cannot delete users
//     Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
// });

// Route::group(['middleware' => ['role:faculty']], function () {

//     Route::get('/faculty-dashboard', [UserController::class, 'facultyDashboard'])->name('faculty.dashboard');

// });



Route::resource('menus',MenuController::class);
Route::resource('menu-permission',MenuPermissionController::class);
Route::get('menu-permission/create',[MenuPermissionController::class,'create_permission']);
// Route::resource('menu-permission',[MenuController::class]);
// Route::post('/assign-permission', [MenuPermissionController::class, 'assignPermission'])->name('menupermissions.assign');


 Route::controller(FacultyController::class)->group(function(){
    Route::get('/faculty/create','create')->name('create.faculty');
    Route::get('/dashboard/faculty','index')->name('faculty.index');
    Route::post('/faculty/store', 'store')->name('faculty.store');
    Route::get('/faculty/edit/{id}', 'edit')->name('edit.faculty');
    Route::put('/faculty/update/{id}', 'update')->name('update.faculty');
    Route::delete('/faculty/delete/{id}', 'destroy')->name('delete.faculty');
    route::get('/faculty/searching','search')->name('faculty.search');
    Route::get('/teacher','faculty')->name('faculty.member');
});

Route::controller(EventController::class)->group(function(){
    Route::get('/events','events')->name('events');
    Route::get('/dashboard/event', 'index')->name('event.index');
    Route::get('event/create', 'create')->name('event/create');
    route::post('event_store','event_store')->name('event_store');
    route::get('event_show/{id}','show')->name('event_show');
    route::get('/event_edit/{id}','edit')->name('event_edit');
    route::put('event_update/{id}','event_update')->name('event_update');
    route::delete('event_delete/{id}','destroy')->name('event_delete');
});

Route::controller(RoutineController::class)->group(function(){
    route::get('/semester/spring','spring')->name('spring.routines');
    route::get('/semester/fall','fall')->name('fall.routines');
    route::get('/dashboard/routine','index')->name('routine.index');
    // route::get('/routine/create','create')->name('routine.create');
    route::post('/routine/store','store')->name('routine.store');
    route::get('/routine/show/{id}','show')->name('routine.show');
    route::get('/routine/edit/{id}','edit')->name('routine.edit');
    route::put('/routine/update/{id}','update')->name('routine.update');
    route::delete('/routine/delete/{id}','destroy')->name('routine.delete');
    Route::get('/files/download/{id}',  'download')->name('files.download');
});

// Route::controller(AdminController::class)->group(function(){

//     Route::get('user', 'user')->name('admin.user');
//     Route::get('admin/show/{id}', 'show')->name('show');
//     Route::get('admin/edit/{id}', 'edit')->name('admin.edit');
//     Route::put('admin/update/{id}','update')->name('admin.update');
//     Route::delete('admin/delete/{id}', 'destroy')->name('admin.delete');

// });


route::resource('schedules',ScheduleController::class);
Route::delete('/schedules/{schedule_id}', [ScheduleController::class, 'destroy'])->name('schedules.delete');
// Route::get('/schedules/edit/{id}', [ScheduleController::class, 'edit'])->name('schedules.edit');
// Route::get('/schedules/show/{id}', [ScheduleController::class, 'show'])->name('schedules.show');
route::post('schedules/search',[ScheduleController::class,'search'])->name('schedule.search');



route::resource('Courses',CourseController::class);
route::get('/search',[CourseController::class,'search'])->name('course.search');
route::get('/course_list',[CourseController::class,'course_list'])->name('course_list');
route::get('/course',[CourseController::class,'program'])->name('program');
Route::get('/courses', [CourseController::class, 'showCourseList'])->name('courses.list');
Route::get('/courses/{semester}', [CourseController::class, 'getCoursesBySemester']);




 Route::controller(AlumniController::class)->group(function(){
    Route::get('Admission/alumni', 'alumni')->name('alumni');
    Route::get('/dashboard/alumni', 'index')->name('alumni.index');
    Route::get('/alumni/create', 'create')->name('create.alumni');
    Route::post('/alumni/store', 'store')->name('alumni.store');
    Route::get('/alumni/edit/{id}', 'edit')->name('edit.alumni');
    Route::put('/alumni/update/{id}', 'update')->name('update.alumni');
    Route::delete('/alumni/delete/{id}', 'destroy')->name('delete.alumni');
});

 Route::controller(ScholarshipController::class)->group(function(){
    Route::get('/admission/scholarship', 'scholar')->name('scholarship');
    Route::get('/dashboard/scholarship', 'index')->name('scholarship.index');
    Route::get('/scholarship/create', 'create')->name('create.scholarship');
    Route::post('/scholarship/store', 'store')->name('store.scholarship');
    Route::get('/scholarship/edit/{id}', 'edit')->name('edit.scholarship');
    Route::put('/scholarship/update/{id}', 'update')->name('update.scholarship');
    Route::delete('/scholarship/delete/{id}', 'destroy')->name('delete.scholarship');
});

Route::controller(StudentController::class)->group(function(){
    Route::get('/students', 'index')->name('student.index');
    Route::get('/student/create', 'create')->name('create');
    Route::post('/student', 'store')->name('student.store');
    Route::get('/student/show/{id}', 'show')->name('student.show');
    Route::get('/student/edit/{id}', 'edit')->name('student.edit');
    Route::put('/student/update/{id}','update')->name('student.update');
    Route::delete('student/delete/{id}', 'destroy')->name('delete');
    Route::get('/student/search','search')->name('student.search');
    Route::get('student/login', 'sign_in')->name('sign_in');
 });

Route::controller(StaffController::class)->group(function(){
    route::get('/staff/index','index')->name('staff.index');
    route::get('/staff/create','create')->name('staff.create');
    route::post('store','store')->name('staff.store');
    route::get('staff/edit/{id}','edit')->name('staff.edit');
    route::put('staff/update/{id}','update')->name('staff.update');
    route::delete('staff/delete/{id}','destroy')->name('staff.delete');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','home')->name('home');
    route::get('/about','about')->name('about');
    route::get('/local_tuition','Local_tuition')->name('Local_tuition');
    route::get('/international_tuition','international_tuition')->name('international_tuition');
    route::get('/admission_eligibility','admission_eligibility')->name('admission_eligibility');
    Route::get('/chart','chart')->name('chart');
    Route::get('/static','static')->name('static');
    Route::get('/contact','contact')->name('contact');
});

Route::controller(ClubController::class)->group(function(){
    Route::get('/club','club')->name('club');
    Route::get('/committee','committee')->name('committee');
    Route::get('/upcoming','upcoming')->name('upcoming');
    Route::get('/membership','membership')->name('membership');
    Route::get('/membership/index','index')->name('membership.index');
});

Route::controller(NoticeBoardController::class)->group(function(){
    Route::get('/notices','notice')->name('notice');
    Route::get('/dashboard/notice','index')->name('notice.index');
    Route::get('/notice/create','create')->name('notice.create');
    Route::post('/store','store')->name('notice.store');
    Route::get('/notice/edit/{id}','edit')->name('notice.edit');
    Route::put('/notice/update/{id}','update')->name('notice.update');
    Route::delete('/notice/delete/{id}','destroy')->name('notice.delete');

});

// website setup

route::resource('/herosection',HerosectionController::class);
Route::delete('/herosection/{id}', [HerosectionController::class, 'destroy'])->name('herosection.delete');

route::resource('/services',ServiceController::class);
Route::delete('/service/{id}', [ServiceController::class, 'destroy'])->name('service.delete');


Route::controller(FeatureController::class)->group(function(){
    Route::get('/feature/index','index')->name('feature.index');
    Route::get('/feature/create','create')->name('feature.create');
    Route::post('/feature','store')->name('feature.store');
    Route::get('/feature/edit/{id}','edit')->name('feature.edit');
    Route::put('/feature/update/{id}','update')->name('feature.update');
    Route::delete('/feature/delete/{id}','destroy')->name('feature.delete');

});

route::resource('/footer',FooterController::class);
Route::delete('/footer/{id}', [FooterController::class, 'destroy'])->name('footer.delete');




Route::get('/pdf_generate', [App\Http\Controllers\PdfController::class,'pdf_generate']);



Route::post('/send-mail', [MailController::class, 'store'])->name('send.mail.data');

Route::get('/send-mail-form', [MailController::class, 'create'])->name('send-mail-form.create');

Route::get('/notifications', [NotificationController::class, 'store'])->name('notifications.store');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::patch('/notifications/{notification}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
Route::post('/notifications', [NotificationController::class, 'store'])->name('notifications.store');
Route::delete('/notifications/{notification}', [NotificationController::class, 'destroy'])->name('notifications.delete');

require __DIR__.'/auth.php';
