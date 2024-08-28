<?php

namespace App\Http\Controllers;

use Log;
use Exception;
Use App\Mail\SendRoutine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function SendWelcomeEmail(){
    $toEmail = 'itmoffecial@gmail.com';
    $message ='welcome to our itm website';
    $subject = 'Welcome email in laravel using email';
    // $fromEmail = 'itmoffecial@gmail.com';
    // $fromName = 'ITM OFFICIAL';
    // $headers = "From: $fromEmail \r\n";

    $response = Mail::to($toEmail)->send(new SendRoutine($message,$subject));

    dd($response);
   }

   public function sendContactMail(Request $request){

    $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'subject'=> 'required | min:5 |max:100',
        'message' => 'required| min:10 |max:255',
        'attachment' =>'required | mimes:pdf,doc,docx,xls,xlsx,csv|max:2048'
    ]);

    try{
        if($request->hasFile('attachment')){

            $fileName = time().'.'.$request->file('attachment')->extension();
            $request->file('attachment')->move('attachment', $fileName);

            $adminMail = 'itmoffecial@gmail.com';


            $response = Mail::to( $adminMail)->send(new SendRoutine($request->all(), $fileName));

            // if($response){
            //     return back()->with('success','Thank You Email sent successfully');
            // }
            // return back()->with('error','please try again');


                dd($response);

        }

    }
    catch(Exception $e){
        return back()->with('error','please try again');
    }

   }

   public function contactForm(){

    return view('mail-temlate.contact-form');

   }


}
