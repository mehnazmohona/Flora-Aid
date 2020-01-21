<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGardenersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardeners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userID');
            $table->string('phone');
            $table->string('division');
            $table->string('zipcode');
            $table->string('country');
            $table->string('street');
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
        Schema::dropIfExists('gardeners');
    }
}
