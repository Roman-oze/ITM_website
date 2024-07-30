<?php

namespace App\Http\Controllers;
use App\Models\Staff;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function chart(){
        return view('statistic.chart');
    }

    public function static(){
        return view('statistic.static');
    }

   

}
