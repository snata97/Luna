<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPromoutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_promoution', function (Blueprint $table) {
            $table->bigInteger('id_category')->unsigned();
            $table->bigInteger('id_promotion')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_promotion')->references('id')->on('promotions');
            $table->primary(array('id_category', 'id_promotion'));
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
        Schema::dropIfExists('category_promoution');
    }
}
