<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->bigIncrements('parcel_id');
            $table->string('descricao', 100);
            $table->integer('valor');
            $table->integer('qtd_parcela');
            $table->unsignedBigInteger('loan_id');
            $table->foreign('loan_id')->references('loan_id')->on('loans')->onDelete('cascade');
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
        Schema::dropIfExists('parcels');
    }
}
