<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubinController extends Controller
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

  
    public function index(Request $request)
    {
        if($request->session()->has('user'))
        {
           dd($this->session_data('user'));
        }

        return view('hubin');
    }
}
