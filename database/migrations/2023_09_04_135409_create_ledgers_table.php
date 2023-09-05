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
        Schema::create('ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ledger_name', 255);
            $table->integer('group_id');
            $table->integer('account_type_id');
            $table->integer('frozen')->comment('0=no,1=yes');
            $table->integer('balance_must_be')->comment('0=Debit,1=Credit');
            $table->text('description');
            $table->integer('editable_flag')->comment('1=edit,2=no-edit');
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
        Schema::dropIfExists('ledgers');
    }
};
