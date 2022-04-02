<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecomplexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recomplexes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->unsignedBigInteger('floor_id')->nullable();
            $table->foreign('floor_id')->references('id')->on('floors');
            $table->unsignedBigInteger('hometype_id')->nullable();
            $table->foreign('hometype_id')->references('id')->on('hometypes');
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
        Schema::dropIfExists('recomplexes');
    }
}
