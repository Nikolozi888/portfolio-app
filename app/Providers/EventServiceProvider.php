<?php

namespace App\Providers;

use App\Events\ReplyEmailEvent;
use App\Listeners\SendReplyEmail;
use App\Listeners\SendReplyEmailLog;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ReplyEmailEvent::class => [
            SendReplyEmail::class,
            SendReplyEmailLog::class,
        ],
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
