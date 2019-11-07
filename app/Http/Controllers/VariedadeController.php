<?php

namespace App\Http\Controllers;

use App\Variedade;
use App\Cultura;
use App\Inimigo;

use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;


class VariedadeController extends Controller
{
    public function index (Request $request)
    {
        $search = $request->get('search');
        $variedades = Variedade::where('nome', 'LIKE', '%'.$search.'%')                         
                ->paginate(10);
        return view('variedades.index', compact('variedades','search'));
    }


    public function show(Variedade $variedade)
    {
        $cultura = Cultura::all();
        $inimigos = Inimigo::all();
        return view('variedades.show')
            ->with('variedade',$variedade)
            ->with('cultura',$cultura)
            ->with('inimigos',$inimigos);
    }

    

    public function store (){
        //
    }
    
}

