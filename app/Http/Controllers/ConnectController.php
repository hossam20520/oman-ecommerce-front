<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Mongodb;
class ConnectController extends Controller
{
    //
     private $mongodb;

    public function __construct() {
     
        $this->mongodb = new Mongodb();
    }

    public function connect(Request $req){
  
         $obj = [
             "username"=>$req->username,
             "password"=>$req->password
         ];
       
      
        $this->mongodb->sendPostData($obj , "/api/v1.0/user/login");
   

      

        $resp =  $this->mongodb->getReponse();
        if($resp['status']){
            $req->session()->put('token', 'Bearer '.$resp['access_token']);
             $req->session()->put('code', 200);
            }
        return $resp;
    }
}
