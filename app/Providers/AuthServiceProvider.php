<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Enums\UserRole;
use App\Models\User;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        //
        Gate::define('isAdmin', function(User $user){
            return $user->role == UserRole::ADMIN;
        });
        Gate::define('isUser', function(User $user){
            return $user->role == UserRole::USER;
        });
    }
}
