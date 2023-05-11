<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipsController extends Controller
{
    public function scholarships()
    {
        return view('Scholarships.scholarships');
    }

    public function ngo(Request $request)
    {
        return view('stypeNGO.ngo');
    }

    public function private(Request $request)
    {
        return view('stypePrivate.private');
    }

    public function gov(Request $request)
    {
        return view('stypeGovernment.gov');
    }



}
