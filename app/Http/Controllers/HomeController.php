<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

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
        $data = \App\gudang::all(); 
        $data2 = \App\item::all();
        return view('Pages.dashboard')->with('data',$data)->with('data2',$data2);
    }
}
