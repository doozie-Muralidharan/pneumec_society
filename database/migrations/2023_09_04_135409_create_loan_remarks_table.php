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
        Schema::create('loan_remarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('loanId');
            $table->enum('status_from', ['draft', 'under_verification', 'under_approval', 'approved', 'rejected']);
            $table->enum('status_to', ['draft', 'under_verification', 'under_approval', 'approved', 'rejected']);
            $table->text('remark');
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
        Schema::dropIfExists('loan_remarks');
    }
};
