<?php

namespace App\Providers;

use illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Schema;
use illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Auth::viaRequest('api', function ($request) {
        //     $user = \App\Models\User::where('username', $request->username)->first();

        //     if ($user && Hash::check ($request->password, $user->password)) {
        //         return $user;
        //     }
        // });
    }
}
