<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('id_client');
            $table->string('code_commune');
            $table->string('description');
            $table->string('latitude')->default(0);
            $table->string('longitude')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_client')
                ->references('id')->on('clients')->onDelete('cascade');

            $table->foreign('code_commune')
                ->references('code')->on('communes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
