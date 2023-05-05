<?php

namespace Modules\Mail\Listeners;

use Modules\Mail\Entities\Queue;

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

        Queue::create([
            'subject' => $title,
            'body' => $message,
            'email' => $contact,
            'attachments' => json_encode($attachments),
        ]);

        /*
        TODO: JOB Automation For Sending Email
    sendmail([
    'to' =>  $contact->email,
    'subject' => $title,
    'message' => $message,
    'attachments' => $attachments,
    ]);
     */

    }
}
