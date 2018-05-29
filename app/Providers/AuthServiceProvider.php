<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        $gate->define('view-users', function ($user)
        {
            foreach ($user->roles as $role)
            {
                if($role->name === 'admin')
                    return true;

                return false;
            }
        });

        $gate->define('view-all-hotels', function ($user)
        {
            foreach ($user->roles as $role)
            {
                if($role->name === 'admin')
                    return true;

                return false;
            }
        });

        $gate->define('view-own-hostels', function ($user)
        {
            foreach ($user->roles as $role)
            {
                if($role->name === 'hoteler')
                    return true;

                return false;
            }
        });

        $gate->define('admin', function ($user)
        {
            foreach ($user->roles as $role)
            {
                if($role->name === 'admin')
                    return true;

                return false;
            }
        });

        $gate->define('hoteler', function ($user)
        {
            foreach ($user->roles as $role)
            {
                if($role->name === 'hoteler')
                    return true;

                return false;
            }
        });
    }
}
