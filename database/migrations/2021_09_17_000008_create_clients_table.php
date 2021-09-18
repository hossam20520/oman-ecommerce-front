<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('role');
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('group')->nullable();
            $table->string('company')->nullable();
            $table->string('crn')->nullable();
            $table->timestamps();
        });
    }
}
