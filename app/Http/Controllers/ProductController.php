<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Eloquent\ModelRequest;

class ProductController extends Controller
{
  
    public function index()
    {
        $produto= Product::paginate(10);
        return view('Product.index')->with('product',$produto);
    }
   public function store(Request $request)
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
        
    }
}