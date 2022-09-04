<?php

namespace App\Providers;

use App\Jobs\ProductLiked;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \App::bindMethod(ProductLiked::class.'@handle' ,fn($job) => $job->handle());
    }
}
