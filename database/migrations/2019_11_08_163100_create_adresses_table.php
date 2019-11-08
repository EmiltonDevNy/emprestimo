<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->bigIncrements('adress_id');
            $table->string('numero', 10);
            $table->integer('cep');
            $table->string('complemento', 50);
            $table->string('rua', 50);
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('client_id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('adresses');
    }
}
