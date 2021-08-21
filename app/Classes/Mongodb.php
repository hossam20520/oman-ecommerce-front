<?php
namespace App\Classes;
use GuzzleHttp\Client;
use Session;
class Mongodb {
    private $obj;
    private $client;
    private $response;
    private $token;
    private $storage = "http://localhost:8000/storage/";
    public function __construct() {
      // $this->obj = $obj;
      // dd(Session::get('token'));
      $this->token = Session::get('token');
      $this->client = new client();
    }
    public function getObject() {
       return $this->obj;
    }

 


  public function getStoragePath(){
    return $this->storage;
  }


    public function sendPostData($obj , $url){
    $res = $this->client->post(env('FRONT_API_URL').$url, [
                             'http_errors' => false,
                            'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json' ,  'Authorization'=> $this->token],
                            'body'    => json_encode( $obj)
                            ]);

                            $res->getHeader('content-type');
                            $response = json_decode($res->getBody(), true);
                           $this->response  = $response;
                           
    }




public function sendPutData($obj , $url){

  $res = $this->client->put(env('FRONT_API_URL').$url, [
    'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json' , 'Authorization'=> $this->token],
    'body'    => json_encode($obj)
    ]);

    $res->getHeader('content-type');
    $response = json_decode($res->getBody(), true);
    $this->response  = $response;



}


public function delete($url){

  $res = $this->client->delete(env('FRONT_API_URL').$url, [
    'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json' , 'Authorization'=> $this->token]
    // 'body'    => json_encode($obj)
    ]);

    $res->getHeader('content-type');
    $response = json_decode($res->getBody(), true);
   $this->response  = $response;

}




    public function getReponse(){
        return $this->response;
    }


    public function update($id , $url ){
    
      $u = $this->sendPutData($id , $url);


    }

























    public function store($obj , $url ){

      try {
        $res = $this->client->post(env('FRONT_API_URL').$url, [
          'http_errors' => false,
          'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json' ,  'Authorization'=> $this->token ],
          'body'    => json_encode( $obj)
          ]);

          $res->getHeader('content-type');
          $statuscode = $res->getStatusCode();
          $response = json_decode($res->getBody(), true);
           

            
          if( $statuscode == 403){
          Session::put('code', 403);   
          $this->response = 403;
           return false;
          }
   
          $this->response  = $response;

    
      } catch (Exception $ex) {
      return $ex;
      }



 
    
          
   
    }

    public function index($page , $count , $url){

      try {
        $res = $this->client->get(env('FRONT_API_URL').$url."/".$count."/".$page , [
          'http_errors' => false,
          'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json' ,  'Authorization'=> $this->token ],
      
          ]);

          $res->getHeader('content-type');
          $statuscode = $res->getStatusCode();
          $response = json_decode($res->getBody(), true);


          if( $statuscode == 403){
          Session::put('code', 403);   
          $this->response = 403;
           return false;
          }
   
          $this->response  = $response;

      } catch (Exception $ex) {
      return $ex;
      }

    }

    public function edit(){

    }


    public function get($ID , $url){
      try {
        $res = $this->client->get(env('FRONT_API_URL').$url."/".$ID , [
          'http_errors' => false,
          'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json' ,  'Authorization'=> $this->token ],
      
          ]);

          $res->getHeader('content-type');
          $statuscode = $res->getStatusCode();
          $response = json_decode($res->getBody(), true);


          if( $statuscode == 403){
          Session::put('code', 403);   
          $this->response = 403;
           return false;
          }
   
          $this->response  = $response;

      } catch (Exception $ex) {
      return $ex;
      }
    }


   

    public function getStatus(){




    }

    
}











?>
