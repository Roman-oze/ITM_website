<?php

namespace App\Providers;

use App\Models\Footer;
use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */


    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
{
    // Check if a user is authenticated before accessing Auth::user()->role
    View::composer('*', function ($view) {
        if (Auth::check()) { // Check if the user is authenticated
            $roleId = Auth::user()->role;

            // Fetch menus where the user has at least one permission
            $menus = Menu::with(['children' => function ($query) use ($roleId) {
                $query->whereHas('permissions', function ($q) use ($roleId) {
                    $q->where('role_id', $roleId);
                })->orderBy('order'); // Order the children
            }])
            ->whereNull('parent_id') // Only top-level menus
            ->whereHas('permissions', function ($query) use ($roleId) {
                $query->where('role_id', $roleId);
            })
            ->orderBy('order') // Order the top-level menus
            ->get();

            // Share the menus with all views
            $view->with('menus', $menus);
        }
    });

    // Share $footers with all views that include '_footer'
    View::composer('layout._footer', function ($view) {
        $view->with('footers', Footer::all());
    });

    // Use Bootstrap for pagination styling
    Paginator::useBootstrap();
}



}
