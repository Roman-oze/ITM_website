<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ComplainNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $name;
    public $content;

    /**
     * Create a new notification instance.
     */
    public function __construct($name , $content)
    {
    $this->name = $name;
    $this->content = $content;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
       $name = $this->name;
       $content = $this->content;
        return (new MailMessage)->view('emails.Mail-Template',compact('name','content'));

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
