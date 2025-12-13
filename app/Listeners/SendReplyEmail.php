<?php

namespace App\Listeners;

use App\Events\ReplyEmailEvent;
use App\Mail\ReplyMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendReplyEmail
{
    public function handle(ReplyEmailEvent $event): void
    {
        Mail::to($event->contact->email)->send(
            new ReplyMail([
                'from' => $event->fromEmail,
                'to' => $event->contact->name,
                'body' => $event->body,
            ])
        );
    }
}
