<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reg_number');
            $table->string('brand');
            $table->string('model');
            $table->unsignedBigInteger('owner_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on("owners");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
