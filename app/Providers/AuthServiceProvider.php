<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('manage-user', function ($user) {
            // List the permissions you want to check
            $permissions = [ 'update user','delete user', 'update delete','edit','update', 'delete'];

            // Check if the user has any of these permissions
            return collect($permissions)->contains(function ($permission) use ($user) {
                return $user->can($permission);
            });
        });
    }

}
