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

}
