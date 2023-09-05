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
        Schema::create('loan_types', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('loan_type', ['STL', 'LTL']);
            $table->integer('memberId')->index('memberId');
            $table->date('sanctionDate')->nullable();
            $table->integer('principalAmount');
            $table->integer('loanDurationInMonths');
            $table->integer('interestRatePerAnnum');
            $table->double('interestAmount');
            $table->double('totalAmount');
            $table->integer('remainingTenureInMonths');
            $table->double('remainingPrincipalAmount');
            $table->double('remainingInterestAmount');
            $table->enum('status', ['draft', 'under_verification', 'under_approval', 'approved', 'rejected'])->default('draft');
            $table->integer('maximumNumberOfGuarantors');
            $table->integer('minimumNumberOfGuarantors');
            $table->string('purposeOfLoan', 255);
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
        Schema::dropIfExists('loan_types');
    }
};
