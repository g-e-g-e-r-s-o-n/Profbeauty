<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('foreign_prod_ID')->nullable();
//            $table->foreign('foreign_prod_ID')->references('id')->on('products');
            $table->foreign('foreign_prod_ID')->references('id')->on('products')->onDelete('cascade');
            $table->mediumText('image')->nullable();
            $table->timestamps();

//            $table->unsignedBigInteger('id_image')->nullable();
//
//            $table->foreign('id_image')
//                ->references('question_id')
//                ->on('questions')
//                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
