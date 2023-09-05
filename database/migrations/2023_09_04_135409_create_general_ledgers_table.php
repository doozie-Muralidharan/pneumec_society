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
        Schema::create('general_ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('financial_year_id');
            $table->integer('ledger_id');
            $table->decimal('opening_balance_debits', 20);
            $table->decimal('opening_balance_credits', 20);
            $table->decimal('debits', 20);
            $table->decimal('credits', 20);
            $table->decimal('closing_balance', 20);
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('general_ledgers');
    }
};
