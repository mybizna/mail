<?php

namespace Modules\Mail\Listeners;


class SendEmail
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
        $title = $event->title;
        $message = $event->message;
        $contact = $event->contact;
        $attachments = $event->attachments;

        sendmail([
            'to' =>  $contact->email,
            'subject' => $title,
            'message' => $message,
            'attachments' => $attachments,
        ]);

    }
}
