<?php

namespace App\Http\Controllers;

use App\Option;
use App\DataPoint;
use App\Product;
use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;;


class OptionController extends Controller
{

    public function index()
    {
        $option= Option::paginate(10);
        return view('opcoes.index')->with('opcoes',$option);
    }

    public function store(Request $request, Product $product)//A variável produto serve aqui para ir buscar o Id dos produtos
    {
        $referencia = Option::max('referencia')+1;//Serve para incrementar um valor (+1) à última reeferência já criada anteriormente na base de dados
        // dd($referencia);
       // dd($request->all());

       foreach ($request->except('_token') as $key => $value) {
           $opcao = new Option();
           $opcao->referencia = $referencia;
           $opcao->datapoint_id = $key;
           $opcao->value = $value;
           $opcao->product_id = $product->id;
           $opcao->save();
       }
       
       return redirect()->route('produtos.show', $product);
       
    }  

   

}


