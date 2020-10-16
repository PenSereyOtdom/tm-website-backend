<?php

namespace App\Containers\Applies\Notifications;

use App\Containers\Applies\Models\Applies;
use App\Ship\Parents\Notifications\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppliesNotification extends Notification implements ShouldQueue
{

    use Queueable;

    protected $notificationMessage;

    public function __construct($notificationMessage)
    {
        $this->notificationMessage = $notificationMessage;
    }
    
    public function toArray($notifiable)
    {
        return [
            'content' => $this->notificationMessage,
        ];
    }

   
}