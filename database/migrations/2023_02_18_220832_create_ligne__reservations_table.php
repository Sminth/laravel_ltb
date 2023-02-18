<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne__reservations', function (Blueprint $table) {
            $table->id();
            $table->string("num_res");
            $table->string("sous_total");
            $table->string("nomb_pers");
            $table->string("nomb_adulte");
            $table->string("numb_enfant");
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
        Schema::dropIfExists('ligne__reservations');
    }
}
