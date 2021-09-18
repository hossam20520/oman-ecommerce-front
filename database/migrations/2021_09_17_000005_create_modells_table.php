<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModellsTable extends Migration
{
    public function up()
    {
        Schema::create('modells', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model')->unique();
            $table->timestamps();
        });
    }
}
