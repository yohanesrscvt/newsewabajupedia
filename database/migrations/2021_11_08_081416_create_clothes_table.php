<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id'); // foreign key
            $table->foreign('agent_id')->references('id')->on('users');
            $table->unsignedBigInteger('category_id'); // foreign key
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('name');
            $table->string('size');
            $table->bigInteger('price');
            $table->string('picture_path');
            $table->string('description');
            $table->bigInteger('qty');
            $table->float('rating',2,1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes');
    }
}
