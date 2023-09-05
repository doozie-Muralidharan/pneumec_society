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
        Schema::create('short_term_loan_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('short_term_loan_interest');
            $table->string('min_loan_amount');
            $table->string('max_loan_amount');
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
        Schema::dropIfExists('short_term_loan_settings');
    }
};
