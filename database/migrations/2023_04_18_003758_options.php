<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class options extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() 
    {
        //
        Schema::create('options', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('category_id');

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
