<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function faqs(Request $request)
    {
        return view('SupCenter.faqs');
    }

    public function terms(Request $request)
    {
        return view('SupCtr.terms');
    }
}
