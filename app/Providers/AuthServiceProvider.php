<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create',function($user,$modParam){
            return $user->hasPermission('create',$modParam);
        });

        Gate::define('read',function($user,$modParam){
            return $user->hasPermission('read',$modParam);
        });

        Gate::define('update',function($user,$modParam){
            return $user->hasPermission('update',$modParam);
        });

        Gate::define('delete',function($user,$modParam){
            return $user->hasPermission('delete',$modParam);
        });

        Gate::define('show',function($user,$modParam){
            return $user->hasPermission('show',$modParam);
        });

        Gate::define('read-own',function($user,$modParam){
            return $user->hasPermission('read-own',$modParam);
        });

        Gate::define('update-own',function($user,$modParam){
            return $user->hasPermission('update-own',$modParam);
        });

        Gate::define('delete-own',function($user,$modParam){
            return $user->hasPermission('delete-own',$modParam);
        });

        Gate::define('show-own',function($user,$modParam){
            return $user->hasPermission('show-own',$modParam);
        });

        Gate::define('export',function($user,$modParam){
            return $user->hasPermission('export',$modParam);
        });

        Gate::define('export-own',function($user,$modParam){
            return $user->hasPermission('export-own',$modParam);
        });


        //
    }
}
