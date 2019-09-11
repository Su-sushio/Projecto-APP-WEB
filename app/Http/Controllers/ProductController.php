<?php

namespace App\Http\Controllers;
use App\Product;
use App\DataPoint;

use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;


class ProductController extends Controller
{
  

    public function index()
    {
        $product= Product::paginate(10);
        return view('produtos.index')->with('produtos',$product);
    }
   
    

    public function create()
    {
        return view ('produtos.create');

    }


    public function store(Request $request)
    {
       $produto = new Product();
       $produto->fill($request->all());
       $produto->save();

       $datapoint = new DataPoint();
       $datapoint->name = "Ref:";
       $datapoint->type = "Inteiro";
       $datapoint->product_id = $produto->id;
       $datapoint->save();

       $datapoint = new DataPoint();
       $datapoint->name = "Nome";
       $datapoint->type = "Texto";
       $datapoint->product_id = $produto->id;
       $datapoint->save();

       $datapoint = new DataPoint();
       $datapoint->name = "Preço";
       $datapoint->type = "Decimal";
       $datapoint->product_id = $produto->id;
       $datapoint->save();

       $datapoint = new DataPoint();
       $datapoint->name = "Link";
       $datapoint->type = "Texto";
       $datapoint->product_id = $produto->id;
       $datapoint->save();

       

       return redirect()->route('produtos.index');
       
    }

    public function show(Product $produto)
    {
        return view('produtos.show')->with('product', $produto);
    }



    public function edit(Product $produto)
    {
        //
    }
    
    public function update(Request $request, Product $produto)
    {
      $produto->fill($request->all());
      $produto->save();

       return redirect()->route('produtos.index');
    }
    
    public function destroy(Product $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}