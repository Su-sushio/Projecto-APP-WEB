<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\User;
use Illuminate\Http\Eloquent\ModelRequest;


class UserController extends Controller
{
    public function index(){

    	$utilizadores = User::paginate(10);
        return view('utilizadores.index')->with('utilizadores', $utilizadores);
    }


    public function create()
    {
        return view ('utilizadores.create');

    }

    public function store(Request $request)
    {
       
       $utilizador = new User();
       $utilizador->fill($request->all());
       $utilizador->save();
       return redirect()->route('utilizadores.index',$utilizador);
    }    


    public function show(User $utilizador)
    {
        return view('utilizadores.show');
    }



    public function edit(User $utilizador)
    {
        return view ('utilizadores.edit')->with ('utilizador', $utilizador);
    }
    
    public function update(Request $request, User $utilizador)
    {
      $utilizador->fill($request->all());
      $utilizador->save();

      return redirect()->route('utilizadores.index');
    }
    
    public function destroy(User $utilizador)
    {
        $utilizador->delete();
        return redirect()->route('utilizadores.index');
    }
}