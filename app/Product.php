<?php

namespace App\\Http\Controllers;
use App\Prpduct;

use Illuminate\Http\Eloquent\ModelRequest;

class Product extends Controller
{
  
    public function index()
    {
        $produto= Produto::paginate(10);
        return view('Product.index')->with('product',$produto);
    }
   public function store(Request $request)
    {
        //
        $produto = new Produto();
        $produto->fill($request->all());
        $produto->save();
        return redirect()->route('product.index');
    }
    public function show(produto $produto)
    {
        $produto = Produto::all();
        return view('product.show')
            ->with('product',$product)
           
    }
    public function edit(Produto $product)
    {
        //
    }
    
    public function update(Request $request, Produto $produto)
    {
        $produto->fill($request->all());
        $produto->save();
        return redirect()->route('product.show',['Produto'=>$produto]); 
    }
    
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('product.index');
    }
}