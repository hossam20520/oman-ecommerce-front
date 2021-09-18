<?php 

namespace App\Classes;

use App\Classes\Mongodb;
use App\Models\Brand;
use App\Models\Category;
class Products{
  private $baseURL = "/api/v1.0/admin/product";
   private $obj;
   private $ID;
   private $mongodb;
   public function __construct() {
          $this->mongodb = new Mongodb();
          
           
         }


      public function setObjet($obj){
        $this->obj = $obj;
      }

      public function getObject(){
         return $this->obj;
      }

      public function setID($ID){
        $this->ID = $ID;
        }

     public function delete(){
          $this->mongodb->delete($this->baseURL."/".$this->ID);
      }
      public function store(){
        $gall = [];
        foreach ($this->obj['gallery'] as $key => $value) {
            array_push($gall , $this->mongodb->getStoragePath().$this->ID."/".$value );
        }

        $obj = [
          "sys_id" => $this->ID,
          "title"=> $this->obj['name'],
          "title_ar"=> $this->obj['name_ar'],
          "price"=> $this->obj['price'],
          "discount"=> ($this->obj['discount'] == null) ? 0 : $this->obj['discount'],
          "sale"=> $this->obj['sale'],
          "startSaleDateTime"=> ($this->obj['start_sale_date_time'] == null) ? 0 : $this->obj['start_sale_date_time'],
          "endSaleDateTime"=> ($this->obj['end_sale_date_time'] == null) ? 0 : $this->obj['end_sale_date_time'] ,
          "currency"=> "OMR",
          "description_en"=> ($this->obj['desc'] == null) ? "" : $this->obj['desc'],
          "description_ar"=> ($this->obj['full_desc_ar'] == null) ? "" : $this->obj['full_desc_ar'],
          "short_description_en"=> ($this->obj['short_desc'] == null) ? "" : $this->obj['short_desc'],
          "short_description_ar"=> ($this->obj['short_desc_ar'] == null) ? "" : $this->obj['short_desc_ar'],
          "productCost"=> $this->obj['product_cost'],
          "sku"=> $this->obj['sku'],
          "qty" => $this->obj['inventory'],
          "how_to_use_en" =>  ($this->obj['howtouse'] == null) ? "" : $this->obj['howtouse'],
          "how_to_use_ar"=> ($this->obj['how_to_use_ar'] == null) ? "" : $this->obj['how_to_use_ar'],
          "youtube_link"=> ($this->obj['youtube_link'] == null) ? "" : $this->obj['youtube_link'] ,
          "image"=> $this->mongodb->getStoragePath().$this->ID."/".$this->obj['image'],
          "gallery"=> $gall,
          "category"=> Category::find($this->obj['category_id'])->category,
          "brand"=> $this->obj['brand'],
          "rate"=> 0,
          "product_unit"=> $this->obj['product_unit'],
          "group"=> [
            "price_group_1"=> $this->obj['price_group_1'],
            "price_group_2"=> $this->obj['price_group_2'],
            "price_group_3"=> $this->obj['price_group_3'],
            "price_group_4"=> $this->obj['price_group_4'],
            "price_group_5"=> $this->obj['price_group_5'],
            "price_group_6"=> $this->obj['price_group_6']
          ],
          "wholesaler"=> [
            "group"=> [
              "price_group_1",
              "price_group_2",
              "price_group_3",
              "price_group_4",
              "price_group_5",
              "price_group_6"
            ],
            "product_unit" => ($this->obj['product_unit_wholse'] == null) ? "" : $this->obj['product_unit_wholse'],
            "items_per_unit" => ($this->obj['items_per_unit'] == null) ? "" : $this->obj['items_per_unit'],
            "unit_qty" => ($this->obj['unit_qty'] == null) ? "" : $this->obj['unit_qty']
         ]
              ];
        
        
        // return $obj;
               
        $this->mongodb->sendPostData($obj , $this->baseURL);
        
        
        
        }


        public function update(){


          $gall = [];
          foreach ($this->obj['gallery'] as $key => $value) {
              array_push($gall , $this->mongodb->getStoragePath().$this->ID."/".$value );
          }
  
          $obj = [
            "sys_id" => $this->ID,
          "title"=> $this->obj['name'],
          "title_ar"=> $this->obj['name_ar'],
          "price"=> $this->obj['price'],
          "discount"=> ($this->obj['discount'] == null) ? 0 : $this->obj['discount'],
          "sale"=> $this->obj['sale'],
          "startSaleDateTime"=> ($this->obj['start_sale_date_time'] == null) ? 0 : $this->obj['start_sale_date_time'],
          "endSaleDateTime"=> ($this->obj['end_sale_date_time'] == null) ? 0 : $this->obj['end_sale_date_time'] ,
          "currency"=> "OMR",
          "description_en"=> ($this->obj['desc'] == null) ? "" : $this->obj['desc'],
          "description_ar"=> ($this->obj['full_desc_ar'] == null) ? "" : $this->obj['full_desc_ar'],
          "short_description_en"=> ($this->obj['short_desc'] == null) ? "" : $this->obj['short_desc'],
          "short_description_ar"=> ($this->obj['short_desc_ar'] == null) ? "" : $this->obj['short_desc_ar'],
          "productCost"=> $this->obj['product_cost'],
          "sku"=> $this->obj['sku'],
          "qty" => $this->obj['inventory'],
          "how_to_use_en" =>  ($this->obj['howtouse'] == null) ? "" : $this->obj['howtouse'],
          "how_to_use_ar"=> ($this->obj['how_to_use_ar'] == null) ? "" : $this->obj['how_to_use_ar'],
          "youtube_link"=> ($this->obj['youtube_link'] == null) ? "" : $this->obj['youtube_link'] ,
          "image"=> $this->mongodb->getStoragePath().$this->ID."/".$this->obj['image'],
          "gallery"=> $gall,
          "category"=> Category::find($this->obj['category_id'])->category,
          "brand"=> $this->obj['brand'],
          "rate"=> 0,
          "product_unit"=> $this->obj['product_unit'],
          "group"=> [
            "price_group_1"=> $this->obj['price_group_1'],
            "price_group_2"=> $this->obj['price_group_2'],
            "price_group_3"=> $this->obj['price_group_3'],
            "price_group_4"=> $this->obj['price_group_4'],
            "price_group_5"=> $this->obj['price_group_5'],
            "price_group_6"=> $this->obj['price_group_6']
          ],
          "wholesaler"=> [
            "group"=> [
              "price_group_1",
              "price_group_2",
              "price_group_3",
              "price_group_4",
              "price_group_5",
              "price_group_6"
            ],
            "product_unit" => ($this->obj['product_unit_wholse'] == null) ? "" : $this->obj['product_unit_wholse'],
            "items_per_unit" => ($this->obj['items_per_unit'] == null) ? "" : $this->obj['items_per_unit'],
            "unit_qty" => ($this->obj['unit_qty'] == null) ? "" : $this->obj['unit_qty']
         ]
                ];
      
          $this->mongodb->sendPutData($obj , $this->baseURL."/".$this->ID);
      
      
      }







      public function getResponse(){
        $resp =  $this->mongodb->getReponse();
        return $resp;
      }
    



}

















?>