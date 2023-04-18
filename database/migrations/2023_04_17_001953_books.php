<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class books extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() 
    {
        //
        Schema::create('books', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() 
    {
        //
    }
};
