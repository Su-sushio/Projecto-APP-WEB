<?php
 
namespace App\Http\Controllers;
use App\DataPoint;
 
use Illuminate\Http\Eloquent\ModelRequest;
 
use Illuminate\Http\Request;


class DataPointController extends Controller
{
    public function index()
    {
        $datapoint= DataPoint::paginate(10);
        return view('pontodedados.index')->with('pontodedados',$datapoint);
    }
   

<<<<<<< HEAD
   
}
=======
    public function create()
    {
        return view ('pontodedados.create');

    }


    public function store(Request $request)
    {
       $produto = new DataPoint();
       $produto->fill($request->all());
       $produto->save();
       return redirect()->route('pontodedados.index');
       
    }

    public function show(DataPoint $produto)
    {
        return view('pontodedados.show')->with('product', $produto);
    }



    public function edit(DataPoint $produto)
    {
        //
    }
    
    public function update(Request $request, DataPoint $produto)
    {
      $produto->fill($request->all());
      $produto->save();

       return redirect()->route('pontodedados.index');
    }
    
    public function destroy(DataPoint $produto)
    {
        $produto->delete();
        return redirect()->route('pontodedados.index');
    }
}

>>>>>>> 8b44d34b60545b509208061f420d09a0151fe594
