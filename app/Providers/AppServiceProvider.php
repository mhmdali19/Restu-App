<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Enums\UserRole;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!app()->runningInConsole()) {
            $users_count = User::all()->count();
            if ($users_count == 0) {
                $user = new User();
                $user->password = Hash::make('12345678');
                $user->email = 'super@admin.com';
                $user->name = 'SuperAdmin';
                $user->role = UserRole::SUPER_ADMIN;
                $user->save();
            }
        }


        Schema::defaultStringLength(191);
    }
}
