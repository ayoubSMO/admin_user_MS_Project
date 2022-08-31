<?php

namespace App\Providers;

use App\Jobs\ProductCreation;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // Make all the handles here to communicate with services !! 
        \App::bindMethod(ProductCreation::class . '@handle' ,fn($job) => $job->handle());


    }
}
