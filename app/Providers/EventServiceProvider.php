<?php

namespace Modules\Mail\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Core\Events\SendLengthy;
use Modules\Mail\Listeners\SendEmail;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        SendLengthy::class => [
            SendEmail::class,
        ],
    ];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     *
     * @return void
     */
    protected function configureEmailVerification(): void
    {

    }

}
