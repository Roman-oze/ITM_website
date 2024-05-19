<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
   public function membership(){

$data['student'] = DB::table('students')->get();

return view('club.membership',$data);

   }


}
