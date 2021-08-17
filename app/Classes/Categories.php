<?php
namespace App\Classes;
use App\Classes\Mongodb;
use App\Models\Category;



class Categories{
private $baseURL = "/api/v1.0/admin/category";
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


public function MapObject($inputs){

    $obj = [
        "category_id"=>$this->ID,
        "category_name_en"=> ($this->inputs['category'] == null) ? "" : $this->inputs['category'],
        "category_name_ar"=> ($this->inputs['category_name_ar'] == null) ? "" : $this->inputs['category_name_ar'],
        "image"=> $this->mongodb->getStoragePath().$this->ID."/".$this->inputs['image']
    ];

    return $obj;


}


public function update(){


    $obj = [
        "category_name_en"=> ($this->obj['category'] == null) ? "" : $this->obj['category'],
        "category_name_ar"=> ($this->obj['category_name_ar'] == null) ? "" : $this->obj['category_name_ar'],
        "image"=> $this->mongodb->getStoragePath().$this->ID."/".$this->obj['image']
    ];

    $this->mongodb->sendPutData($obj , $this->baseURL."/".$this->ID);


}

public function store(){
//    $obj = $this->MapObject($this->obj);
    $obj = [
        "category_id"=>$this->ID,
        "category_name_en"=> ($this->obj['category'] == null) ? "" : $this->obj['category'],
        "category_name_ar"=> ($this->obj['category_name_ar'] == null) ? "" : $this->obj['category_name_ar'],
        "image"=> $this->mongodb->getStoragePath().$this->ID."/".$this->obj['image']
    ];



       
$this->mongodb->sendPostData($obj , $this->baseURL);



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