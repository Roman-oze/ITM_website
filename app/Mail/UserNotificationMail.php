<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $filePath;

    public function __construct($details, $filePath = null)
    {
        $this->details = $details;
        $this->filePath = $filePath;
    }

    public function build()
    {
        $email = $this->subject($this->details['subject'])
                      ->view('emails.notification')
                      ->with('details', $this->details);

        // Attach file if exists
        if ($this->filePath) {
            $email->attach($this->filePath);
        }

        return $email;
    }
}
