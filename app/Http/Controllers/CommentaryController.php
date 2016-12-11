<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Pokemon;

class CommentaryController extends Controller
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
    public function index($id)
    {
        $pokemon = Pokemon::find($id);
        return view('commentary')->with('pokemon',$pokemon);
    }

    public function store(Request $request)
    {
        dd($request->input('comentario'););

        dd($request);
    }
}
