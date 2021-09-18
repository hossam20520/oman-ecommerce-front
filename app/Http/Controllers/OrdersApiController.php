<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrdersApiController extends Controller
{
  public function store(Request $request){


    $obj = [
  
        'fname'=> $request->user['fname'],
        'lname'=> $request->user['lname'],
        'group'=> $request->user['group'],
        'username'=> $request->user['phone'],
        'email'=> $request->user['email'],
        'date'=> $request->date,
        'notes'=> $request->shipping['address']['notes'],
        'orderid'=> $request->id,
        'payment'=> $request->paymentId,
        'payment_status'=> $request->paymentStatus,
        'status'=> $request->status,
        'total_cost'=> $request->totalCost,
        'street_1'=> $request->shipping['address']['street1'],
        'city'=> $request->shipping['address']['city'],
        'state'=> $request->shipping['address']['state'],
        'country'=>$request->shipping['address']['country'],
        'zip'=> $request->shipping['address']['zip'],
        'phone'=> $request->shipping['phone']
    ];

    $order = Order::create($obj);

    return response()->json(['id'=> $order->id], 200);

  }



public function update(Request $request){

  $order = Order::where("id" , $request->id )->update(['payment_status' => $request->payment_status]);
  return response()->json(['status'=>  "success" ], 200);
}




}
