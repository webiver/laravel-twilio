<?php

namespace Webiver\LaravelTwilio;

use Illuminate\Support\ServiceProvider;
use Webiver\LaravelTwilio\Classes\Twilio;

class LaravelTwilioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('Twilio', function () {
            return new Twilio();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
