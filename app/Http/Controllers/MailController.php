<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
   public function SendEmail(){
    try{



    }
    catch(\Exception $e){return "unable to send email". $e->getMessage();}
   }
}
