<?php

namespace YourVendor\FileManager;

use Illuminate\Support\ServiceProvider;

class FileManagerServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/file-manager.php', 'file-manager');
    }

    public function boot()
    {
        // Publish configuration file
        $this->publishes([
            __DIR__ . '/../config/file-manager.php' => config_path('file-manager.php'),
        ], 'file-manager-config');

        // Load package routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
