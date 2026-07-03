<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuPermissionController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Itm;
use App\Models\User;
use App\Notifications\ComplainNotification;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



Route::get('/send-notification', function () {
    // First system
    // $user = User::first();
    // $user->notify(new ComplainNotification());
    // second system
    // $user = User::first();
    // Notification::send($user, new ComplainNotification());
    // third system

    $users = User::all();

    foreach ($users as $user) {
        Notification::send($user, new ComplainNotification('Roman Oze', 'Software developer'));
    }



    return 'success';
});



// Route::group(['middleware' => ['menu.permission']],function(){
route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// Menu
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');

//  Menu Permission

route::resource('menu-permissions', MenuPermissionController::class);
route::get('MenuPermissionController/{id}/delete', [MenuPermissionController::class, 'destroy']);
// });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // routes/web.php

});

Route::middleware(['auth'])->group(function(){

    Route::resource('roles', RoleController::class);

    Route::resource('permissions', PermissionController::class);

    Route::resource('users', UserController::class);

});


Route::middleware(['auth'])->group(function () {

    Route::resource('permissions', PermissionController::class);

    Route::get('permissions/{id}/delete', [PermissionController::class, 'destroy']);

    Route::resource('roles', RoleController::class);

    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);

    Route::get('roles/{roleId}/give-permission', [RoleController::class, 'addPermissionToRole']);

    Route::put('roles/{roleId}/give-permission', [RoleController::class, 'updatePermissionToRole']);

    Route::resource('users', UserController::class);

    Route::get('users/{userId}/delete', [UserController::class, 'destroy']);

});
// Route::group(['middleware' => ['isAdmin']], function () {

//     route::resource('permissions', App\Http\Controllers\PermissionController::class);
//     route::get('permissions/{id}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

//     route::resource('roles', App\Http\Controllers\RoleController::class);
//     route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);

//     route::get('roles/{roleId}/give-permission', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
//     route::put('roles/{roleId}/give-permission', [App\Http\Controllers\RoleController::class, 'updatePermissionToRole']);

//     route::resource('users', UserController::class);
//     route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);
// });
// Middleware End

// website setup

route::resource('/herosection', HerosectionController::class);
Route::delete('/herosection/{id}', [HerosectionController::class, 'destroy'])->name('herosection.delete');

route::resource('/services', ServiceController::class);
Route::delete('/service/{id}', [ServiceController::class, 'destroy'])->name('service.delete');

route::resource('/footer', FooterController::class);
Route::delete('/footer/{id}', [FooterController::class, 'destroy'])->name('footer.delete');

Route::controller(FeatureController::class)->group(function () {
    Route::get('/feature/index', 'index')->name('feature.index');
    Route::get('/feature/create', 'create')->name('feature.create');
    Route::post('/feature', 'store')->name('feature.store');
    Route::get('/feature/edit/{id}', 'edit')->name('feature.edit');
    Route::put('/feature/update/{id}', 'update')->name('feature.update');
    Route::delete('/feature/delete/{id}', 'destroy')->name('feature.delete');
});



Route::resource('menus', MenuController::class);
Route::get('menu/display', [MenuController::class, 'display'])->name('menu.display');

Route::resource('menu-permission', MenuPermissionController::class);
Route::get('menu-permission/create', [MenuPermissionController::class, 'create_permission']);
Route::get('menu-permission/sidebar', [MenuPermissionController::class, 'sidebar']);
// Route::resource('menu-permission',[MenuController::class]);
// Route::post('/assign-permission', [MenuPermissionController::class, 'assignPermission'])->name('menupermissions.assign');



Route::controller(TeamMemberController::class)->group(function () {
    Route::get('/team/create', 'create')->name('team.create');
    Route::get('/team-member/index', 'index')->name('team.index');
    Route::post('/team/store', 'store')->name('team.store');
    Route::get('/team/edit/{id}', 'edit')->name('team.edit');
    Route::put('/team/update/{id}', 'update')->name('team.update');
    Route::delete('/team/delete/{id}', 'destroy')->name('team.delete');
    route::get('/team/search', 'search')->name('team.search');
    Route::get('/team-member', 'team')->name('team.team-member-list');
});



Route::controller(EventController::class)->group(function () {
    Route::get('/events', 'events')->name('events');
    Route::get('/event/index', 'index')->name('event.index');
    Route::get('event/create', 'create')->name('event.create');
    route::post('event_store', 'event_store')->name('event.store');
    route::get('event_show/{id}', 'show')->name('event_show');
    route::get('/event_edit/{id}', 'edit')->name('event_edit');
    route::put('event_update/{id}', 'event_update')->name('event_update');
    route::delete('event_delete/{id}', 'destroy')->name('event_delete');
});



Route::controller(StaffController::class)->group(function () {
    route::get('/staff/index', 'index')->name('staff.index');
    route::get('/staff/create', 'create')->name('staff.create');
    route::post('/staff/store', 'store')->name('staff.store');
    route::get('staff/edit/{id}', 'edit')->name('staff.edit');
    route::put('staff/update/{id}', 'update')->name('staff.update');
    route::delete('staff/delete/{id}', 'destroy')->name('staff.delete');
});

Route::controller(NoticeBoardController::class)->group(function () {
    Route::get('/notices', 'notice')->name('notice');
    Route::get('/dashboard/notice', 'index')->name('notice.index');
    Route::get('/notice/create', 'create')->name('notice.create');
    Route::post('/store', 'store')->name('notice.store');
    Route::get('/notice/edit/{id}', 'edit')->name('notice.edit');
    Route::put('/notice/update/{id}', 'update')->name('notice.update');
    Route::delete('/notice/delete/{id}', 'destroy')->name('notice.delete');
});


Route::get('/pdf_generate', [App\Http\Controllers\PdfController::class, 'pdf_generate']);


Route::controller(MailController::class)->group(function () {

    Route::post('/send-mail', 'store')->name('send.mail.data');
    Route::get('/send-mail-form', 'create')->name('send-mail-form.create');
});




Route::get('/notifications', [NotificationController::class, 'store'])->name('notifications.store');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::patch('/notifications/{notification}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
Route::post('/notifications', [NotificationController::class, 'store'])->name('notifications.store');
Route::delete('/notifications/{notification}', [NotificationController::class, 'destroy'])->name('notifications.delete');




Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::patch('/feedback/{feedback}/read', [FeedbackController::class, 'markAsRead'])->name('feedback.read');
Route::get('/feedback/list', [FeedbackController::class, 'index'])->name('feedback.index');
Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.delete');


Route::controller(GalleryController::class)->group(function () {
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/gallery/index', 'index')->name('gallery.index');
    Route::get('/gallery/create', 'create')->name('gallery.create');
    Route::post('/gallery/store', 'store')->name('gallery.store');
    Route::get('/gallery/edit/{id}', 'edit')->name('gallery.edit');
    Route::put('/gallery/update/{id}', 'update')->name('gallery.update');
    Route::delete('/gallery/{id}', 'destroy')->name('gallery.delete');
});

Route::get('/blog/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');


Route::controller(ServiceCategoryController::class)->group(function () {
    Route::get('/service-category', [ServiceCategoryController::class, 'serviceCategories'])->name('service-category');
    Route::get('/service-category/index', [ServiceCategoryController::class, 'index'])->name('service-category.index');
    Route::post('/service-category', [ServiceCategoryController::class, 'store'])->name('service-category.store');
    Route::put('/service-category/update/{id}', [ServiceCategoryController::class, 'update'])->name('service-category.update');
    Route::get('/service-category/{id}/delete', [ServiceCategoryController::class, 'destroy'])->name('service-category.delete');
});

Route::controller(AchievementController::class)->group(function () {
    Route::get('/achievement', [AchievementController::class, 'achievement'])->name('achievement');
    Route::get('/achievement/index', [AchievementController::class, 'index'])->name('achievement.index');
    Route::post('/achievement', [AchievementController::class, 'store'])->name('achievement.store');
    Route::put('/achievement/update/{id}', [AchievementController::class, 'update'])->name('achievement.update');
    Route::get('/achievement/{id}/delete', [AchievementController::class, 'destroy'])->name('achievement.delete');
        Route::get('/achievement/{id}/delete', 'destroy')->name('achievement.delete');

});




Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    // Route::get('/gallery','gallery')->name('gallery');
    route::get('/about', 'about')->name('about');
    route::get('/local_tuition', 'Local_tuition')->name('Local_tuition');
    route::get('/international_tuition', 'international_tuition')->name('international_tuition');
    route::get('/admission_eligibility', 'admission_eligibility')->name('admission_eligibility');
    Route::get('/chart', 'chart')->name('chart');
    Route::get('/static', 'static')->name('static');
    Route::get('/contact', 'contact')->name('contact');
});
require __DIR__ . '/auth.php';
