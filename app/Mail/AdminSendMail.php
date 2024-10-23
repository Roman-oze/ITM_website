<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminSendMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $messageContent;
    public $attachmentPath;

    public function __construct($messageContent, $attachmentPath = null)
    {
        $this->messageContent = $messageContent;
        $this->attachmentPath = $attachmentPath; // Store the file path
    }

    public function build()
    {
        $email = $this->subject('Email Send From Department of ITM')
                      ->view('emails.Mail-Template')
                      ->with('messageContent', $this->messageContent);

        // Attach the file if the path is provided
        if ($this->attachmentPath) {
            $email->attach(storage_path('app/' . $this->attachmentPath), [
                'as' => basename($this->attachmentPath), // Use original filename
                'mime' => 'application/octet-stream', // You can improve this with the actual MIME type
            ]);
        }

        return $email;
    }
}
