<?php

namespace App\Listeners;

use App\Events\MessageCreated;
use App\MailMethods;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageCreated  $event
     * @return void
     */
    public function handle(MessageCreated $event)
    {
        MailMethods::sendNotificationToAdmin($event->message, $event->message_id);
    }
}
