<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    
    public function page404() { return view('404'); }
    
    public function home() { return view('home'); }
    
    public function userprofile($username) {
        $user=DB::table('users')->where('username', $username)->first();
        if($user!=null) {
            return view('profile', compact('user')); 
        }else{
            return redirect('404');
        }
    }
}
