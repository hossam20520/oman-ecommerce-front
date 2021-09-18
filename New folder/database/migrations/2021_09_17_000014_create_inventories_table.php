<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_ar');
            $table->string('sku')->nullable();
            $table->decimal('price', 15, 2);
            $table->integer('inventory');
            $table->longText('desc')->nullable();
            $table->longText('full_desc_ar');
            $table->longText('short_desc')->nullable();
            $table->longText('short_desc_ar');
            $table->string('brand')->nullable();
            $table->string('product_unit');
            $table->integer('box_quantity')->nullable();
            $table->decimal('product_cost', 15, 2)->nullable();
            $table->decimal('price_group_1', 15, 2);
            $table->decimal('price_group_2', 15, 2);
            $table->decimal('price_group_3', 15, 2);
            $table->decimal('price_group_4', 15, 2);
            $table->decimal('price_group_5', 15, 2);
            $table->decimal('price_group_6', 15, 2);
            $table->string('product_unit_wholse');
            $table->integer('unit_qty')->nullable();
            $table->integer('items_per_unit')->nullable();
            $table->string('sale');
            $table->decimal('discount', 15, 2)->nullable();
            $table->datetime('start_sale_date_time')->nullable();
            $table->datetime('end_sale_date_time')->nullable();
            $table->longText('howtouse')->nullable();
            $table->longText('how_to_use_ar')->nullable();
            $table->string('youtube_link')->nullable();
            $table->timestamps();
        });
    }
}
