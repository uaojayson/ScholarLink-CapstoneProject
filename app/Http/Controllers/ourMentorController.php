<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ourMentorController extends Controller
{
    public function becomeMentor()
    {
        return view('ourMentors.becomeMentor');
    }
}
