<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->bigIncrements('bank_account_id');
            $table->string('favorecido', 50);
            $table->string('cpf_favorecido', 11);
            $table->string('banco', 100);
            $table->integer('operacao');
            $table->integer('conta');
            $table->integer('agencia');
            $table->string('tipo_conta', 50);
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
        Schema::dropIfExists('bank_accounts');
    }
}
