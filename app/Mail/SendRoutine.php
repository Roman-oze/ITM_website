<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRoutine extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $fileName;

    /**
     * Create a new message instance.
     */
    public function __construct($request ,  $fileName)
    {
       $this->request = $request;
       $this->fileName = $fileName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact from - Admin ITM department',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail-template.welcome-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachment = [];
        if ($this->fileName) {
            $attachment = [
                Attachment::fromPath(public_path('/attachment/'.$this->fileName))

            ];
            }
            return $attachment;

    }
}
