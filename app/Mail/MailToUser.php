<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailToUser extends Mailable
{
    use Queueable, SerializesModels;
		
    public $message_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message_array)
    {
        $this->message_data = $message_array;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mail_to_user');
    }
}
