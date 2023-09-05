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
        Schema::create('general_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_detail_id');
            $table->integer('financial_year_id');
            $table->integer('party_type')->comment('1=employee,2=customer,3=supplier');
            $table->integer('party_id');
            $table->integer('type');
            $table->integer('source_id');
            $table->string('voucher_no', 255);
            $table->date('voucher_date');
            $table->timestamp('transaction_date');
            $table->text('narration');
            $table->integer('ledger_id');
            $table->decimal('opening_balance_debits', 20);
            $table->decimal('opening_balance_credits', 20);
            $table->decimal('debits', 20);
            $table->decimal('credits', 20);
            $table->decimal('closing_balance', 20);
            $table->integer('isConfirmed')->default(0);
            $table->integer('created_by');
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
        Schema::dropIfExists('general_transactions');
    }
};
