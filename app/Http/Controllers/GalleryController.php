<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
       public function index()
    {

        $photos = Gallery::where('type', 'Club')->get();
        $single = Gallery::where('type', 'Club')->first();
        
        return view('club.gallery', compact('photos', 'single'));
    }
}
