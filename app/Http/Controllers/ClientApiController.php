<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Clients;
use App\Models\Client;
class ClientApiController extends Controller
{
    


    public function store(Request $request){


        $header = $request->header('Authorization');


        // if($header == "dasEe5e855f47e737e7d447f44f7f4ffffadsf"){
if($request->role == "customer"){
    $obj  = [
           
        'fname'=> $request->fname,
        'lname'=> $request->lname,
        'email'=> $request->email,
        'role'=> $request->role,
        'phone'=> $request->phone,
        'password'=> $request->password,
        'group'=> $request->group
       
    ];
}else{
    $obj  = [
           
    'fname'=> $request->fname,
    'lname'=> $request->lname,
    'email'=> $request->email,
    'role'=> $request->role,
    'phone'=> $request->phone,
    'password'=> $request->password,
    'group'=> $request->group,
    'company'=> $request->wholesaler['company'],
    'crn'=> $request->wholesaler['CRN'],
];
}
     

           $client =  Client::create($obj);

               
            return response()->json(['id'=> $client->id], 200);



        // }

        
    }
}
