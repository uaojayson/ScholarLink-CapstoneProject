<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('student')) {
            return view('student.dashboard');
        } elseif ($user->hasRole('mentor')) {
            return view('mentor.dashboard');
        } elseif ($user->hasRole('affiliate')) {
            return view('affiliate.dashboard');
        } elseif ($user->hasRole('admin')) {
            return view('admin.dashboard');
        }

        return view('home');
    }
}
