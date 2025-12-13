<?php

namespace App\Listeners;

use App\Events\ReplyEmailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendReplyEmailLog
{
    public function handle(ReplyEmailEvent $event): void
    {
        Log::info("Email Sent to — {$event->contact->name}");
    }
}
