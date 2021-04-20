<?php

namespace App\Http\Controllers;

use App\Nid;
use App\User;
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
        return view('home');
    }


    public function userInfo()
    {
        // ========== one to one ===========
        // $user = User::find(Auth::user()->id);
        // return view('welcome', compact('user'));

        // $nid = Nid::where('user_id', Auth::user()->id)->first();
        // return view('welcome', compact('nid'));

        // ========== one to many ===========

        $user = User::find(Auth::user()->id);
        return view('welcome', compact('user'));
    }
}
