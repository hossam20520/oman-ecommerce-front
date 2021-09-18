<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientGroupPivotTable extends Migration
{
    public function up()
    {
        Schema::create('client_group', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id', 'group_id_fk_4654384')->references('id')->on('groups')->onDelete('cascade');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id', 'client_id_fk_4654384')->references('id')->on('clients')->onDelete('cascade');
        });
    }
}
