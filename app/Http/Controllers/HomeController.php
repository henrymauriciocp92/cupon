<?php

namespace App\Http\Controllers;

use App\Entities\Cupon;
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
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Preliminar version of search
     */

    public function results(Request $request){
        $search = $request->input('search_text');

        $cupons=Cupon::search( $request->input('search_text'))->paginate(15);
        $cupons->appends(['search_text' => $search]);
        return view('results',compact('cupons','search'));

    }
}
