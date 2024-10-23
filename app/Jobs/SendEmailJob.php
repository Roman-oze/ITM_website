<?php

namespace App\Jobs;

use App\Mail\AdminSendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $messageContent;
    protected $attachmentPath;

    /**
     * Create a new job instance.
     *
     * @param string $email
     * @param string $messageContent
     * @param string|null $attachmentPath
     */
    public function __construct($email, $messageContent, $attachmentPath = null)
    {
        $this->email = $email;
        $this->messageContent = $messageContent;
        $this->attachmentPath = $attachmentPath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new AdminSendMail($this->messageContent, $this->attachmentPath));
    }
}
