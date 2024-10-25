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
        $request->validate([
            'emails' => 'required',
            'message' => 'required',
            'attachment' => 'nullable|mimes:pdf,doc,docx|max:10240',
        ]);

        // $students = Student::where('batch_id', $request)->get();

        // if($students->isEmpty()) {
        //     return '<p>No students found for this batch.</p>';
        // }

        // $output = '<ul>';
        // foreach ($students as $student) {
        //     $output .= '<li>' . $student->email . '</li>';
        // }
        // $output .= '</ul>';

        // return $output;

        $emails = array_map('trim', explode(',', $request->emails)); // Trim email addresses
        $messageContent = $request->message;

        // Store the attachment if it exists
        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('attachments'); // Store in storage/app/attachments
        }

        // Dispatch the job for each email address
        foreach ($emails as $email) {
            SendEmailJob::dispatch($email, $messageContent, $attachmentPath);
        }


        return back()->with('success', 'Emails sent successfully!');
    }



// public function store( Request $request)
// {

//        $valiadtionData =  $request->validate([
//             'name' =>' required | string | max:255',
//             'email' => 'required|email | unique :users|max:255',
//         ]);

//         DB::table('users')->insert($request->except(keys: '_token'));



//         Mail::to($request->email)->send(new RegistrationSuccessMail($request));

//         Mail::to(users: 'admin@gmail.com')->send(new UserReport());

//         return redirect()->back()->with('success', 'R sent successfully');



// }
    // public function sendMail(Request $request)
    // {
    //     // Validate form data
    //     $validated = $request->validate([
    //         'emails' => 'required|string',
    //         'subject' => 'required|string',
    //         'message' => 'required|string',
    //         'attachment' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    //     ]);

    //     // Email details
    //     $details = [
    //         'subject' => $request->subject,
    //         'message' => $request->message
    //     ];

    //     // Process file upload if it exists
    //     $attachmentPath = null;
    //     if ($request->hasFile('attachment')) {
    //         $attachmentPath = $request->file('attachment')->store('attachments');
    //     }

    //     // Send emails
    //     $emails = explode(',', $request->emails);
    //     foreach ($emails as $email) {
    //         $email = trim($email); // Trim whitespace
    //         // Optional: Validate email format
    //         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //             try {
    //                 Mail::to($email)->send(new UserNotificationMail($details, $attachmentPath));
    //             } catch (\Exception $e) {
    //                 // Optionally handle the error for each email
    //                 return redirect()->back()->with('error', 'Error sending email to: ' . $email);
    //             }
    //         } else {
    //             return redirect()->back()->with('error', 'Invalid email address: ' . $email);
    //         }
    //     }

    //     return redirect()->back()->with('success', 'Emails sent successfully!');
    // }
// public function sendMail(){
//     try{

//         $emails = "rumuislam303@gmail.com";
//         // $subject = "Semester Routine";
//         $message = "Hello, dear student this is your class routine";

//         $response = Mail::to($emails)->send(new SendMail ($message));

//         dd($response);
//     }
//     catch (Exception $e){
//         return redirect()->back()->with('error', 'Error sending email');
//     }
// }
}
