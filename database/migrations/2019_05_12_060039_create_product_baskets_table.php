<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_basket', function (Blueprint $table) {
            $table->bigInteger('id_product')->unsigned();
            $table->string('login');
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('login')->references('login')->on('users');
            $table->primary(array('id_product', 'login'));
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
        Schema::dropIfExists('product_basket');
    }
}
