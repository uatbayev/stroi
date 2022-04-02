<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_flats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('flat_id')->nullable();
            $table->foreign('flat_id')->references('id')->on('flats');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->dateTime('gdate');
            $table->softDeletes();
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
        Schema::dropIfExists('users_flats');
    }
}
