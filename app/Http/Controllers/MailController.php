<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    public function index()
    {
        return view('emails.send-mail');
    }


public function sendMail(Request $request)
{
   $name = $request->name;
   $phone = $request->phone;
   $message = $request->message;

   $toEmail = "rumuislam202@gmail.com";

   $response = Mail::to(  $toEmail )->send(new SendMail($name , $phone , $message));


    return back()->with('success', 'Email(s) sent successfully!');
}


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
