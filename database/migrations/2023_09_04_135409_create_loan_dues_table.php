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
        Schema::create('loan_dues', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('loanId')->index('loanId');
            $table->double('principalAmount');
            $table->double('interestAmount');
            $table->decimal('paidPrincipalAmount', 10)->default(0);
            $table->decimal('paidInterestAmount', 10)->default(0);
            $table->decimal('remainingLoanPrincipalAmount', 10)->default(0);
            $table->boolean('paid');
            $table->boolean('demanded')->default(false);
            $table->dateTime('paymentDate');
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
        Schema::dropIfExists('loan_dues');
    }
};
