<?php

namespace App\Http\Controllers;

use App\Inimigo;
use App\Cultura;
use App\Variedade;

use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;


class InimigoController extends Controller
{

    public function index()
    {
        $enemie= Inimigo::orderBy('id')->get();
        $enemie= Inimigo::paginate(10);
        return view('inimigos.index')->with('inimigos',$enemie);        
     
    }

    public function store(Request $request)
    {
       $enemie = new Inimigo();
       $enemie->fill($request->all());
       $enemie->save();
       return redirect()->route('inimigos.index');//permite redirecionar para a mesma view
    }

        
    public function show(Inimigo $inimigo)
    {
        return view('inimigos.show')->with('inimigo', $inimigo);
    }

}
