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
        Schema::create('long_term_loan_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('long_term_loan_interest');
            $table->string('min_loan_amount');
            $table->string('max_loan_amount');
            $table->string('number_of_guarantors');
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
        Schema::dropIfExists('long_term_loan_settings');
    }
};
