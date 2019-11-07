<?php

namespace App\Http\Controllers;

use App\Adubo;
use App\Empresa;


use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;


class EmpresaController extends Controller
{
    public function index(Request $request)
    {
        $empresas= Empresa::orderBy('id')->get();
        $empresas= Empresa::paginate(10);
        $search = $request->get('search');
        return view('empresas.index',compact('empresas','search'));       
    }

    public function store(Request $request){
       $empresa = new Empresa();
       $empresa->fill($request->all());
       $empresa->save();
       return redirect()->route('empresas.index');
    }

    public function destroy (Empresa $empresa){
        $empresa->delete();
        return redirect()->route('empresas.index');
     }
}
