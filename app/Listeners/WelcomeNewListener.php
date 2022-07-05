<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeNewListener
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
        Mail::to('test@ahmer')->send(new ContactFormMail()); //
    }
}
