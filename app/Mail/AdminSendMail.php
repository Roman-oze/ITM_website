<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminSendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageContent;
    public $attachment;

    /**
     * Create a new message instance.
     */
    public function __construct($messageContent, $attachment = null)
    {
        $this->messageContent = $messageContent;
        $this->attachment = $attachment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject('Admin Send Mail')
                      ->view('Emails.Mail-Template')
                      ->with('messageContent', $this->messageContent);

        // Check if an attachment is present and attach it to the email
        if ($this->attachment) {
            $email->attach($this->attachment->getRealPath(), [
                'as' => $this->attachment->getClientOriginalName(),
                'mime' => $this->attachment->getMimeType(),
            ]);
        }

        return $email;
    }
}


