<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();;
            $table->string('patronymic')->nullable();;
            $table->string('tel')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('iin')->nullable();;
            $table->string('address')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->enum('role', ['user','admin'])->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
