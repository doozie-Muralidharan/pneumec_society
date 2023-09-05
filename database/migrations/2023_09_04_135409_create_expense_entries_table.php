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
        Schema::create('expense_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('financial_year_id');
            $table->integer('paid_from_id')->comment('ledger_id');
            $table->string('paid_to', 255);
            $table->double('voucher_number');
            $table->date('voucher_date');
            $table->date('expense_date');
            $table->integer('mode_of_payment');
            $table->integer('expense_type')->comment('1=company , 2=individual');
            $table->integer('type')->comment('1=petty cash,2=bank');
            $table->string('cheque_ref_id', 255);
            $table->date('cheque_ref_date');
            $table->integer('project_details_id');
            $table->string('bill_no', 255);
            $table->text('attachment');
            $table->text('narration');
            $table->integer('outward_petty_cash_id');
            $table->integer('confirm_flag');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('confirmed_by');
            $table->string('confirmed_at', 255);
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
        Schema::dropIfExists('expense_entries');
    }
};
