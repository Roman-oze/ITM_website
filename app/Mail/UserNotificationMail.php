<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $attachment;

    public function __construct($details, $attachment = null)
    {
        $this->details = $details;
        $this->attachment = $attachment;
    }

    public function build()
    {
        $email = $this->subject($this->details['subject'])
                      ->view('emails.notification')
                      ->with('message', $this->details['message']);

        if ($this->attachment) {
            $email->attach(storage_path('app/' . $this->attachment));
        }

        return $email;
    }
}
