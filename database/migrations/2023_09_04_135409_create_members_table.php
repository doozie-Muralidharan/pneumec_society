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
        Schema::create('members', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userId')->unique('userId')->nullable();
            $table->integer('memberId')->nullable();
            $table->enum('status', ['draft', 'under_verification', 'under_approval', 'approved', 'rejected'])->default('draft');
            $table->string('applicationStatus', 255)->nullable();
            $table->string('applicationRemarks', 255)->nullable();
            $table->string('name', 255);
            $table->string('fatherName', 255);
            $table->enum('gender', ['male', 'female', 'other']);
            $table->enum('religion', ['hindhu', 'muslim', 'christian', 'sikh', 'jain', 'buddhist', 'parsi', 'other']);
            $table->string('caste', 255);
            $table->string('phoneNumber', 255);
            $table->string('externalReferenceNumber', 255)->nullable();
            $table->string('permanentAddress', 255);
            $table->string('temporaryAddress', 255);
            $table->string('aadharNumber', 255)->nullable();
            $table->string('aadharUrl', 255);
            $table->string('panNumber', 255)->nullable();
            $table->string('panUrl', 255);
            $table->integer('companyId')->index('companyId');
            $table->integer('officeId')->index('officeId');
            $table->integer('mainLocationId')->index('mainLocationId');
            $table->integer('locationId')->index('locationId');
            $table->string('department', 255);
            $table->string('designation', 255);
            $table->longText('bankDetails');
            $table->longText('nominee');
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
        Schema::dropIfExists('members');
    }
};
