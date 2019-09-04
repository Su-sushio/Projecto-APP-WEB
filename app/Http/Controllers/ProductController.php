<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Eloquent\ModelRequest;

class ProductController extends Controller
{
  
    public function index()
    {
        $product= Product::paginate(10);
        return view('produtos.index')->with('produtos',$product);
    }
   /*public function store(Request $request)
    {
        //
       
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
        
    }*/
}