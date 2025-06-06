<?php

namespace Manka\GeoIP;

use Illuminate\Support\ServiceProvider;

class GeoIPServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/geoip.php', 'geoip');

        $this->app->singleton('geoip', function () {
            return new GeoIP();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/geoip.php' => config_path('geoip.php'),
        ], 'config');
    }
}
