<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Pokemon;

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
        $Pokemones= Pokemon::paginate(15);
        return view('buscaPokemon')->with('Pokemones',$Pokemones);
    }

    public function postPokemon(Request $request)
    {
        $nombre=$request->input('name');
        
            try
            {
               $pokemon = Pokemon::where('name','=',$nombre)->first();;
                $Pokemones= Pokemon::paginate(15);
            }
            catch(PDOException $e)
            {
                return 'existe un error' + $e;
            }

            if($pokemon =='null')
            {
                 return view('buscaPokemon')->with('Pokemones',$Pokemones);
            }
        return view('indexPokemon')->with('pokemon',$pokemon);
    }

    public function show( $id )
    {
        $ic = Pokemon::find($id);
        return view('show')->with('pokemon',$ic);
    }

}
