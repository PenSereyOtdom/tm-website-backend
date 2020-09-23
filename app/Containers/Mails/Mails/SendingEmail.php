<?php

namespace App\Containers\Mails\Mails;

use App\Containers\User\Models\User;
use App\Ship\Parents\Mails\Mail;
use Illuminate\Bus\Queueable;

/**
 * Class SendingEmail
 */
class SendingEmail extends Mail
{
    use Queueable;

    protected $recipient;

    /**
     * SendingEmail constructor.
     *
     * @param $recipient
     */
    public function __construct(User $recipient)
    {
        $this->recipient = $recipient;
    }

    public function build()
    {
        return $this->view('mails::')
            ->to($this->recipient->email, $this->recipient->name)
            ->with([
                // place your replacement variables here...
                //'name' => $this->recipient->name,
            ]);
    }
}
