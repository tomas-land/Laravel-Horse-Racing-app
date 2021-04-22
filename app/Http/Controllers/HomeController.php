<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $betters = \App\Models\Better::orderBy('bet', 'DESC')->get();
        
        return view('home', ['betters' => $betters]);
        
    }
}
