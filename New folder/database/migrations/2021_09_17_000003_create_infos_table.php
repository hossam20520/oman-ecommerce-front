<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            $table->longText('about_en')->nullable();
            $table->longText('about_ar')->nullable();
            $table->string('terms_title_en')->nullable();
            $table->longText('terms_en')->nullable();
            $table->string('terms_ar_title')->nullable();
            $table->longText('terms_ar')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('snapchat')->nullable();
            $table->timestamps();
        });
    }
}
