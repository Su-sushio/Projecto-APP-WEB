<?php

namespace App\Http\Controllers;

use App\Adubo;
use App\Empresa;



use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;


class AduboController extends Controller
{
    
    public function index()
    {
        $adubos= Adubo::orderBy('id')->get();
        $adubos= Adubo::paginate(10);
        $empresas = Empresa::all();
        return view('adubos.index')->with('adubos',$adubos)->with('empresas',$empresas);        
     
    }

    public function store(Request $request)
    {

       $adubo = new Adubo();
       $adubo->fill($request->all());
       $adubo->save();       
       return redirect()->route('adubos.index');    
    }

    public function destroy (Adubo $adubo){
        $adubo->delete();
        return redirect()->route('adubos.index');
     }
    
}
