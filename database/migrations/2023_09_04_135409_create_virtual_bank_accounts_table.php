<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_bank_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('accountId')->index('accountId');
            $table->enum('type', ['credit', 'debit']);
            $table->double('amount');
            $table->double('workingClosingBalance');
            $table->double('imperestClosingBalance');
            $table->string('remarks', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtual_bank_accounts');
    }
};
