<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \EasyPost\EasyPost;

class EasyPostServiceProvider extends ServiceProvider
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
        EasyPost::setApiKey(env('EASYPOST_API_KEY'));
    }
}
