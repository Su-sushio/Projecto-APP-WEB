<?php

namespace App\Http\Controllers;
use App\DataPoint;



class ProductController extends Controller
{
  

    public function index()
    {

   /*$dados = Pontosdedados(10);
   return view('pontosdedados.index')-> with ('dados',$dados);*/
}

   public function create()

   {
       return view ('pontosdedados.create');

   }
   public function store(Request $request)
   {
      $dados = new dados();
      $dados->fill($request->all());
      $dados->save();
      return redirect()->route('pontosdedados.index');
      
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
