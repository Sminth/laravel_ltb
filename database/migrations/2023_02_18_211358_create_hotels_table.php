<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("phone_1");
            $table->string("phone_2");
            $table->string("phone_3");
            $table->string('email_hotel')->unique();
            $table->string('email_reservation')->unique();
            $table->string("photo");
            $table->string("video");
            $table->string("Pays");
            $table->string("ville");
            $table->integer("etat")->default(1);
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
        Schema::dropIfExists('hotels');
    }
}
