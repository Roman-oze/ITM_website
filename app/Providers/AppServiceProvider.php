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
        View::composer('include._sidenav', function ($view) {
            // $view->with('menus', Menu::all());
                        // $view->with('menu_permissions', Menu::all());

        });

        // Share $footers with all views that include '_footer'
        View::composer('layout._footer', function ($view) {
            $view->with('footers', Footer::all());
        });

        // Use Bootstrap for pagination styling
        Paginator::useBootstrap();
    }


}
