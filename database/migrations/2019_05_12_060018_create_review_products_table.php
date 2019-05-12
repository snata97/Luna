<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_product', function (Blueprint $table) {
            $table->bigInteger('id_order')->unsigned();
            $table->bigInteger('id_review')->unsigned();
            $table->foreign('id_order')->references('id')->on('orders');
            $table->foreign('id_review')->references('id')->on('reviews');
            $table->primary(array('id_order', 'id_review'));
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
        Schema::dropIfExists('review_product');
    }
}
