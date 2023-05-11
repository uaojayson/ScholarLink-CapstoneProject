<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function afList(Request $request)
    {
        return view('Affil.afList');
    }

    public function beAffiliate(Request $request)
    {
        return view('Affiliate.beAffiliate');
    }
}
