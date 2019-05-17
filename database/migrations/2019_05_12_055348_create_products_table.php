<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_en',100);
            $table->string('name_ru',100);
            $table->string('vendor_code',40);
            $table->float('price',8,2);
            $table->string('composition_ru',100);
            $table->string('composition_en',100);
            $table->string('description_ru',1000);
            $table->string('description_en',1000);
            $table->string('collection_en',30);
            $table->string('collection_ru',30);
            $table->integer('size');
            $table->bigInteger('id_category')->unsigned();
            $table->bigInteger('id_manufacturer')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_manufacturer')->references('id')->on('manufacturers');
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
        Schema::dropIfExists('products');
    }
}
