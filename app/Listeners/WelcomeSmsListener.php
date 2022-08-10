<?php

namespace App\Listeners;

use App\Events\NewUserEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeSmsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        dd("New User");
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewUserEvent  $event
     * @return void
     */
    public function handle(NewUserEvent $event)
    {
        //
    }
}
