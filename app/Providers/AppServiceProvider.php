<?php

namespace App\Providers;

use App\Models\Footer;
use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;

use App\Models\Menu;

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
        // Share $menus with all views that include '_sidenav'
        // View::composer('include._sidenav', function ($view) {
        //     $roleId = Auth()->user()->role;



        //     // Fetch menus where the user has at least one permission
        //     $menus = Menu::with(['children' => function ($query) use ($roleId) {
        //         $query->whereHas('permissions', function ($q) use ($roleId) {
        //             $q->where('role_id', $roleId)
        //             ->where(function ($q) {
        //                 $q->where('can_create', true)
        //                     ->orWhere('can_edit', true)
        //                     ->orWhere('can_update', true)
        //                     ->orWhere('can_delete', true);
        //             });
        //         });
        //     }])
        //     ->whereNull('parent_id') // Only top-level menus
        //     ->whereHas('permissions', function ($query) use ($roleId) {
        //         $query->where('role_id', $roleId)
        //             ->where(function ($q) {
        //                 $q->where('can_create', true)
        //                     ->orWhere('can_edit', true)
        //                     ->orWhere('can_update', true)
        //                     ->orWhere('can_delete', true);
        //             });
        //     })
        //     ->orderBy('order')
        //     ->get();



        //     // $view->with('menu_permissions', Menu::all());
        //     $view->with('menus', $menus);



        // });

        // Share $footers with all views that include '_footer'
        View::composer('layout._footer', function ($view) {
            $view->with('footers', Footer::all());
        });

        // Use Bootstrap for pagination styling
        Paginator::useBootstrap();
    }


}
