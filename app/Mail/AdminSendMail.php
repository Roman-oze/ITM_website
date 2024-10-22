<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
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
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Admin Send Mail '
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'Emails.Mail-Template',
            with: [
                'messageContent' => $this->messageContent,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if ($this->attachment) {
            $attachments[] = new \Illuminate\Mail\Mailables\Attachment(
                path: $this->attachment->getRealPath(),
                as: $this->attachment->getClientOriginalName(),
                mime: $this->attachment->getMimeType()
            );
        }

        return $attachments;
    }
}
