<?php 

namespace App\Classes;

use App\Classes\Mongodb;
use App\Models\Brand;
use App\Models\Category;
class Products{
   private $obj;

    public function __construct() {
       $this->mongodb = new Mongodb();
       
        
      }


      public function setObjet($obj){
        $this->obj = $obj;
      }


 public function save($id){
  // dd( $this->obj );
   $obj = [
  "sys_id" => $id,
  "title"=> $this->obj['name'],
  "price"=> $this->obj['price'],
  "discount"=> ($this->obj['discount'] == null) ? 0 : $this->obj['discount'] ,
  "sale"=> ($this->obj['sale'] == null) ? "off" : $this->obj['sale'],
  "startSaleDateTime"=> ($this->obj['start_sale_date_time'] == null) ? 0 : $this->obj['discount'],
  "endSaleDateTime"=> ($this->obj['end_sale_date_time'] == null) ? 0 : $this->obj['discount'],
  "currency"=> "OMR",
  "description"=> ($this->obj['desc'] == null) ? "" : $this->obj['desc'],
  "shortDescription"=> $this->obj['short_desc'],
  "sku"=> ($this->obj['sku'] == null) ? 0 : $this->obj['sku'],
  "qty"=> $this->obj['inventory'],
  "how_to_use"=> ($this->obj['howtouse'] == null) ? "" : $this->obj['howtouse'],
  "youtube_link"=> ($this->obj['youtube_link'] == null) ? "" : $this->obj['youtube_link'],
  "image" => ($this->obj['image'] == null) ? 0 : $this->obj['image'],
  "gallery" => ($this->obj['gallery'] == null) ? 0 : $this->obj['gallery'],
  "category"=> Category::find($this->obj['category_id'])->category,
  "brand"=> Brand::find($this->obj['brand_id'])->brand ,
  "rate"=> 0,
  "product_unit"=> $this->obj['product_unit'],
  "group"=> [
    "price_group_1" => $this->obj['price_group_1'],
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
    "product_unit" => $this->obj['product_unit_wholse'],
    "items_per_unit" => $this->obj['items_per_unit'],
    "unit_qty" => $this->obj['unit_qty']
 ]
      ];
   
     $this->mongodb->store($obj , "/api/v1.0/admin/product");
   


      }


      public function list(){
        $this->mongodb->index(1 , 0 , "/api/v1.0/admin/product");

          
      }


      public function show($ID){
        $this->mongodb->get($ID , "/api/v1.0/admin/product");

      }



      public function getResponse(){
        $resp =  $this->mongodb->getReponse();
        return $resp;
      }
    



}

















?>