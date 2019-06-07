<?php

namespace App\Providers;

use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('admin.layouts.header', function($view){
            if (Auth::guard('admin')->check()){
                $id = Auth::user()->id;
                $roles = Admin::where('id', $id)->first()->roles()->get();
                $view->with('roles', $roles);
            }

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
