<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Client;
use App\Models\Order;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
        $countInverory  = Inventory::count();
        $clientCount = Client::count();
        $sales =  Order::sum('total_cost');



        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        Carbon::setWeekEndsAt(Carbon::SATURDAY);
        $last_users = Client::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();

        $rejected = Order::where('status' , 'cancelled')->count();

        $accepted = Order::where('status' , 'accepted')->count();

        $pending = Order::where('status' , 'pending')->count();


        $deliverd = Order::where('status' , 'delivered')->count();

        $paymentStatus = Order::where('payment_status' , 'rejected')->count();

        $awiting  = Order::where('status' , 'shippedAwaitingDelivery')->count();

        $totalOrders = Order::count();

        $wholesaler = Client::where('role' , 'wholesaler')->count();

        $latest_users = Client::orderBy('created_at','desc')->take(8)->get();

        $latest_orders = Order::orderBy('created_at','desc')->take(7)->get();

        $latest_products = Inventory::orderBy('created_at','desc')->take(5)->get();
        return view('home' , ['inverntory'=> $countInverory ,  'clientcount'=>$clientCount  , 'sales'=>$sales  ,
         'NewUsers'=>$last_users , 'rejected'=> $rejected ,
          'accepted'=>$accepted , 'pending'=>$pending , 'deliverd'=>$deliverd  , 'rejectedPayment'=>$paymentStatus ,
           'awiting'=>$awiting , 'totalOrders'=> $totalOrders , 'wholesaler'=>$wholesaler  , 'lastUsers'=>$latest_users , 'latest_products'=> $latest_products , 'lastOrders'=> $latest_orders] );
    }


public function dashboard(){

   $count  = Inventory::count();


      dd( $count);

   }
}
