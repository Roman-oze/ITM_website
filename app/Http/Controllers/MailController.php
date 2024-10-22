<?php

namespace App\Http\Controllers;
use Exception;

use App\Mail\AdminSendMail;
// use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    public function create()
    {
        return view('emails.send-mail');
    }


    public function store(Request $request)
    {
        $request->validate([
            'emails' => 'required',
            'message' => 'required',
            'attachment' => 'nullable|file|max:10240', // optional file with a size limit (e.g., 10 MB)
        ]);

        // Split emails by comma and trim whitespace
        $emails = array_map('trim', explode(',', $request->emails));
        $messageContent = $request->message;
        $attachment = $request->file('attachment');

        // Loop through each email and send the mail
        foreach ($emails as $email) {
            Mail::to($email)->send(new AdminSendMail($messageContent, $attachment));
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
