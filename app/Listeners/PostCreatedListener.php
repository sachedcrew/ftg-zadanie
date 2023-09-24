<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\PostCreated;

class PostCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }


    public function handle(PostCreated $event)
    {
        UserActivity::create([
            'user_id' => auth()->id(), 
            'activity' => 'Dodano nowy post: ' . $event->post->title,
        ]);
    }
}
