<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use PrintNode\ApiKey;

class PrintNodeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
