<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMails extends Mailable
{
    use Queueable, SerializesModels;
		
    public $contactGuest;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contGuest)
    {
        $this->contactGuest = $contGuest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verify');
    }
}
