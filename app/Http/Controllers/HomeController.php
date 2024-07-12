<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        App::setLocale('es');
        return view('home');
    }
}
