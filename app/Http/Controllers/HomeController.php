<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConfermEmail;
use Mail;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        /*notify()->flash('Welcome back!', 'success', [
            'timer' => 3000,
            'text' => 'It\'s really great to see you again',
        ]);*/
        return view('dashboard.admin.home.home');
    }
}
