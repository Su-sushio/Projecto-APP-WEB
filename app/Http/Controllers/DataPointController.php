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
   

   
}
