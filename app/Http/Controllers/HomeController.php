<?php

namespace App\Http\Controllers;

use App\Carrusel;
use App\zona;
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
        $zonas = zona::all();

        return view('home',compact('carruseles','zonas'));
    }
}
