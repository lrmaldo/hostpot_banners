<?php

namespace App\Http\Controllers;

use App\Carrusel;
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
        $carruseles  = Carrusel::all();

        return view('home',compact('carruseles'));
    }
}
