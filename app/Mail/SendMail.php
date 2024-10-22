<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $message; // Renamed to avoid conflict with class name

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $phone
     * @param string $message
     * @return void
     */
    public function __construct($name, $phone, $message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->message = $message; // Avoid conflict with the $message property of Mailable class
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('ITM admin  ')
                    ->view('emails.notification');
    }
}
