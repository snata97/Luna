<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) {
            $table->integer('quantity');
            $table->integer('size');
            $table->bigInteger('id_order')->unsigned();
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_order')->references('id')->on('orders');
            $table->foreign('id_product')->references('id')->on('products');
            $table->primary(array('id_order', 'id_product'));
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
        Schema::dropIfExists('product_order');
    }
}
