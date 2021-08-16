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
            $table->string('name')->nullable();
            $table->string('sku')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->integer('inventory')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('short_desc')->nullable();
            $table->string('product_unit');
            $table->integer('box_quantity')->nullable();
            $table->decimal('product_cost', 15, 2)->nullable();
            $table->decimal('price_group_1', 15, 2)->nullable();
            $table->decimal('price_group_2', 15, 2)->nullable();
            $table->decimal('price_group_3', 15, 2)->nullable();
            $table->decimal('price_group_4', 15, 2)->nullable();
            $table->decimal('price_group_5', 15, 2)->nullable();
            $table->decimal('price_group_6', 15, 2)->nullable();
            $table->string('product_unit_wholse')->nullable();
            $table->integer('unit_qty')->nullable();
            $table->integer('items_per_unit')->nullable();
            $table->string('sale')->nullable();
            $table->decimal('discount', 15, 2)->nullable();
            $table->datetime('start_sale_date_time')->nullable();
            $table->datetime('end_sale_date_time')->nullable();
            $table->longText('howtouse')->nullable();
            $table->string('youtube_link')->nullable();
            $table->timestamps();
        });
    }
}
