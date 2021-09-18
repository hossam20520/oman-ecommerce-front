<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filter;
use App\Models\Type;
use App\Models\Make;
use App\Models\Modell;
class FilterController extends Controller
{
    //

    public function store(Request $req){

       $res =  Filter::where("brand" , $req->brand)->where("type" , $req->type)->where("model" , $req->model)->get();

       return response()->json(['results'=> $res], 200);

    }

    public function dropdown(Request $req){


        $make = Filter::select('brand')->distinct()->groupBy('brand')->get()->toArray();
      
        $type = Filter::select('type')->distinct()->groupBy('type')->get()->toArray();
        $model = Filter::select('model')->distinct()->groupBy('model')->get()->toArray();
        $arr = ["make"=> $make , "type"=>$type , "model"=>$model  ];


        return response()->json(['results'=>  $arr], 200);
 
     }

    
}
