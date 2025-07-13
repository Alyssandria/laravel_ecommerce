<?php

namespace App\Providers;

use App\View\Composers\NavigationComposer;
use App\View\Composers\OauthComposer;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;

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
    public function boot(): void
    {
        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('google', \SocialiteProviders\Google\Provider::class);
        });


        // REGISTER COMPOSERS
        Facades\View::composer("components.navigation", NavigationComposer::class);
        Facades\View::composer("components.oauth", OauthComposer::class);
    }
}
