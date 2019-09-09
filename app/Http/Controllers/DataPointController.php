<?php

namespace App\Http\Controllers;

use App\DataPoint;
use App\Product;
use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;;


class DataPointController extends Controller
{
    public function index()
    {
        $datapoint= DataPoint::paginate(10);
        return view('pontodedados.index')->with('pontodedados',$datapoint);
    }

    public function create ($id){

        $product = Product::find($id);
        return view ('pontodedados.create')->with('product',$product);
    }

    public function store(Request $request,$id)
    {
        $product = Product::find($id);
       $pontodedados = new DataPoint();
       $pontodedados->fill($request->all());
       $pontodedados->product_id=$id;
       $pontodedados->save();
       return redirect()->route('produtos.show',$product);
    }
}
