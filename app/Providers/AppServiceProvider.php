<?php

namespace App\Providers;

use App\Services\Newsletter;
use App\Services\MailchimpNewsletter;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use MailchimpMarketing\ApiClient;
use App\Models\User;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

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
        Model::unguard();

        Gate::define('admin', function (User $user){
            return $user->username === 'asdf';
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });

    }
}
