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
        $opcao= DataPoint::paginate(10);
        return view('opcoes.index')->with('opcoes',$opcao);
    }

    public function store(Request $request,Product $product)
    {
       
       $opcoes = new Option();
       $opcoes->fill($request->all());
       $opcoes->datapoint_id=$datapoint->id;
       $opcoes->product_id=$produto->id;
       $opcoes->save();
       return redirect()->route('produtos.show',$products);
    }    

}


