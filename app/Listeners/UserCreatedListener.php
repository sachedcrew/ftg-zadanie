<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserCreated;

class UserCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    public function handle(UserCreated $event)
    {
        UserActivity::create([
            'user_id' => $event->user->id,
            'activity' => 'Użytkownik został utworzony',
        ]);
    }
}
