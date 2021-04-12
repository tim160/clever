<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        \Log::useFiles(env('APP_LOG_FILE'), config('app.log_level', 'debug'));
//        $handlers = \Log::getMonolog()->getHandlers();
//        $handler = array_shift($handlers);
//        $handler->setBubble(false);
    }
}
