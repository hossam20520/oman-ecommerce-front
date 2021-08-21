<?php
namespace App\Classes;


namespace App\Classes;
use App\Classes\Mongodb;
use App\Models\Category;



class Clients{
private $baseURL = "/api/v1.0/admin/clients";
 private $obj;
 private $ID;
 private $mongodb;
    public function __construct() {
        $this->mongodb = new Mongodb();
        
         
       }

public function getDegultValues($objs , $schema){
$arr =  [];
foreach ($objs as $key => $value) {
     
}

}





public function store(){
    //    $obj = $this->MapObject($this->obj);

//   if(){

//   }
    

if($this->obj['role'] == "customer"){

    $obj= [
        "user_id"=>$this->ID,
        "fname"=> ($this->obj['fname'] == null) ? "" : $this->obj['fname'],
        "lname"=> ($this->obj['lname'] == null) ? "" : $this->obj['lname'],
        "email"=> ($this->obj['email'] == null) ? "" : $this->obj['email'],
        "role"=> ($this->obj['role'] == null) ? "" : $this->obj['role'],
        "phone"=> ($this->obj['phone'] == null) ? "" : $this->obj['phone'],
        "password"=> ($this->obj['password'] == null) ? "" : $this->obj['password'],
        "group"=> "price_group_6",
        "wholesaler"=> null
    ];

}else{


    $obj = [
        "user_id"=>$this->ID,
        "fname"=> ($this->obj['fname'] == null) ? "" : $this->obj['fname'],
        "lname"=> ($this->obj['lname'] == null) ? "" : $this->obj['lname'],
        "email"=> ($this->obj['email'] == null) ? "" : $this->obj['email'],
        "role"=> ($this->obj['role'] == null) ? "" : $this->obj['role'],
        "phone"=> ($this->obj['phone'] == null) ? "" : $this->obj['phone'],
        "password"=> ($this->obj['password'] == null) ? "" : $this->obj['password'],
        "group"=> ($this->obj['group'] == null) ? "" : $this->obj['group'],
        "wholesaler"=> [
                   "company"=> ($this->obj['company'] == null) ? "" : $this->obj['company'],
                   "CRN"=> ($this->obj['crn'] == null) ? "" : $this->obj['crn'],
        ] 
       
    ];


}


    
     
    
           
    $this->mongodb->sendPostData($obj , $this->baseURL);
    
    
    
    }




public function update(){


    if($this->obj['role'] == "customer"){

        $obj= [
            "user_id"=>$this->ID,
            "fname"=> ($this->obj['fname'] == null) ? "" : $this->obj['fname'],
            "lname"=> ($this->obj['lname'] == null) ? "" : $this->obj['lname'],
            "email"=> ($this->obj['email'] == null) ? "" : $this->obj['email'],
            "role"=> ($this->obj['role'] == null) ? "" : $this->obj['role'],
            "phone"=> ($this->obj['phone'] == null) ? "" : $this->obj['phone'],
            "password"=> ($this->obj['password'] == null) ? "" : $this->obj['password'],
            "group"=> "price_group_6",
            "wholesaler"=> null
        ];
    
    }else{
    
    
        $obj = [
            "user_id"=>$this->ID,
            "fname"=> ($this->obj['fname'] == null) ? "" : $this->obj['fname'],
            "lname"=> ($this->obj['lname'] == null) ? "" : $this->obj['lname'],
            "email"=> ($this->obj['email'] == null) ? "" : $this->obj['email'],
            "role"=> ($this->obj['role'] == null) ? "" : $this->obj['role'],
            "phone"=> ($this->obj['phone'] == null) ? "" : $this->obj['phone'],
            "password"=> ($this->obj['password'] == null) ? "" : $this->obj['password'],
            "group"=> ($this->obj['group'] == null) ? "" : $this->obj['group'],
            "wholesaler"=> [
                       "company"=> ($this->obj['company'] == null) ? "" : $this->obj['company'],
                       "CRN"=> ($this->obj['crn'] == null) ? "" : $this->obj['crn'],
            ] 
           
        ];
    
    
    }


 
    $this->mongodb->sendPutData($obj , $this->baseURL."/".$this->ID);


}




public function delete(){
    $this->mongodb->delete($this->baseURL."/".$this->ID);
}

public function setObject($obj){
$this->obj = $obj;
}


public function setID($ID){
$this->ID = $ID;
}





}





    ?>


