<?php

namespace App\Http\Controllers;
use App\Product;



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
       return redirect()->route('produtos.index');
       
    }

    public function show(produto $produto)
    {
        
    }
    public function edit(Produto $product)
    {
        //
    }
    
    public function update(Request $request, Produto $produto)
    {
      
    }
    
    public function destroy(Produto $produto)
    {
        
    }
}