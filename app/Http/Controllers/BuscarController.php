<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Pokemon;
use App\Commentary;

class BuscarController extends Controller
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
    public function index(Request $request)
    {         
        $noexiste = 1;
        $Pokemones= Pokemon::paginate(15);
        return view('buscaPokemon')->with('Pokemones',$Pokemones)->with('NoExiste',$noexiste);
    }

    public function postPokemon(Request $request)
    {

        $nombre=$request->input('name');
        $pokemon = Pokemon::where('name','=',$nombre)->first();
        $Pokemones= Pokemon::paginate(15);
        $noexiste = NULL;
            
        if($pokemon == NULL)
        {
             return view('buscaPokemon')->with('Pokemones',$Pokemones)->with('NoExiste',$noexiste);
        }
        return view('indexPokemon')->with('pokemon',$pokemon);

    }

    public function show( $id )
    {
        $ic = Pokemon::find($id);

        $comentarios = Commentary::where('id_pokemon', $id)->paginate(25);

        return view('show')->with('pokemon',$ic)->with('comentarios', $comentarios);
    }

}
