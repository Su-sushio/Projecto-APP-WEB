<?php

namespace App\Http\Controllers;

use App\Option;
use App\DataPoint;
use App\Product;
use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;;


class DataPointController extends Controller
{
    public function store(Request $request,Product $product)
    {
       
       $opcoes = new Option();
       $opcoes->fill($request->all());
       $opcoes->datapoint_id=$id;
       $opcoes->product_id=$id;
       $opcoes->save();
       return redirect()->route('produtos.show',$product);
    }  

    




}


