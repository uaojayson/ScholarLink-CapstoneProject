<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function ourStory(Request $request)
    {
        return view('AboutUS.ourStory');
    }

    public function howitWorks(Request $request)
    {
        return view('AbtUs.howitWorks');
    }
}
