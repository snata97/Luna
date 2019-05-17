<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_user', function (Blueprint $table) {
            $table->bigInteger('id_review')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_review')->references('id')->on('reviews');
            $table->foreign('id_user')->references('id')->on('users');
            $table->primary(array('id_review', 'id_user'));
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
        Schema::dropIfExists('review_user');
    }
}
