<?php

namespace App\Providers;

use App\Jobs\ProductCreated;
use App\Jobs\ProductDeleted;
use App\Jobs\ProductUpdated;
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
        \App::bindMethod(ProductCreated::class . '@handle' ,fn($job) => $job->handle());
        \App::bindMethod(ProductUpdated::class . '@handle' ,fn($job) => $job->handle());
        \App::bindMethod(ProductDeleted::class . '@handle' ,fn($job) => $job->handle());


    }
}
