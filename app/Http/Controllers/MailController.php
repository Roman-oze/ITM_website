<?php

namespace App\Http\Controllers;
use Exception;

use App\Jobs\SendEmailJob;
// use App\Mail\SendMail;
use App\Mail\AdminSendMail;
use Illuminate\Http\Request;
use App\models\Batch;
use App\models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    public function create()
    {
        $batches = Batch::get();

        return view('emails.send-mail',compact('batches'));

    }


    public function store(Request $request)
{
    // Validate inputs
    $request->validate([
        'message' => 'required',
        'attachment' => 'nullable|mimes:pdf,doc,docx|max:10240',
    ]);

    $emails = [];
    $messageContent = $request->input('message');
    $attachmentPath = null;

    // Handle attachment if provided
    if ($request->hasFile('attachment')) {
        $attachmentPath = $request->file('attachment')->store('attachments'); // Store in storage/app/attachments
    }

    // Check if batch-wise email is requested
    if ($request->has('batch_id') && $request->batch_id) {
        $batch = Batch::find($request->batch_id);
        if ($batch && $batch->students) {
            $emails = $batch->students->pluck('email')->toArray();
        }
    }
    // Check if manual emails are provided
    elseif ($request->has('emails')) {
        $emails = array_map('trim', explode(',', $request->input('emails')));
    }

    // Check if there are emails to send to
    if (empty($emails)) {
        return back()->with('error', 'No emails found for sending.');
    }

    // Send emails with or without attachment based on each scenario
    foreach ($emails as $email) {
        // Dispatch job based on whether attachment exists
        if ($attachmentPath) {
            SendEmailJob::dispatch($email, $messageContent, $attachmentPath);
        } else {
            SendEmailJob::dispatch($email, $messageContent, null);
        }
    }

    return redirect()->back()->with('success', 'Emails sent successfully!');
}




}
