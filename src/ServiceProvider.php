<?php

namespace Clover\CloudImage;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/cloud-image.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('cloud-image.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'cloud-image'
        );

        $this->app->bind('cloud-image', function () {
            return new CloudImage();
        });
    }
}
