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
        Schema::create('society_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('abbrevation', 255)->nullable();
            $table->string('domain', 255)->nullable();
            $table->string('default_letter_head', 255)->nullable();
            $table->string('country_id', 255)->nullable();
            $table->integer('state_id')->nullable();
            $table->string('logo_path', 255)->nullable();
            $table->string('certificate', 255)->nullable();
            $table->string('pan_number', 255)->nullable();
            $table->string('gst_number', 255)->nullable();
            $table->string('default_holiday_list', 255)->nullable();
            $table->string('create_chart_of_accounts_based_on', 255)->nullable();
            $table->string('default_terms', 255)->nullable();
            $table->string('chart_of_accounts_template', 255)->nullable();
            $table->string('default_currency', 255)->nullable();
            $table->integer('default_payable_account_id')->nullable();
            $table->integer('default_cash_account_id')->default(0);
            $table->integer('default_cost_of_goods_sold_account_id')->default(0);
            $table->integer('default_receivable_account_id')->default(0);
            $table->integer('default_income_account_id')->default(0);
            $table->integer('round_off_account_id')->default(0);
            $table->integer('default_payroll_payable_account_id')->default(0);
            $table->integer('write_off_account_id')->default(0);
            $table->integer('round_off_cost_center_id')->default(0);
            $table->integer('exchange_gain_loss_account_id')->default(0);
            $table->integer('default_bank_account_id')->default(0);
            $table->string('default_stock_in_hand', 255)->nullable();
            $table->integer('accumulated_depreciation_account_id')->default(0);
            $table->integer('gain_loss_account_on_asset_disposal_id')->default(0);
            $table->integer('depreciation_expense_account_id')->default(0);
            $table->integer('asset_depreciation_cost_center_id')->default(0);
            $table->integer('default_employee_advance_id')->default(0);
            $table->integer('salary_advance_id')->default(0);
            $table->integer('default_bank_group_id')->default(0);
            $table->integer('default_bank_ledger_id')->default(0);
            $table->integer('default_tax_group_id')->default(0);
            $table->integer('default_tax_ledger_id')->default(0);
            $table->string('default_ledger_setapart_id', 255)->nullable();
            $table->integer('default_cgst_input_ledger_id')->default(0);
            $table->integer('default_sgst_input_ledger_id')->default(0);
            $table->integer('default_igst_input_ledger_id')->default(0);
            $table->integer('default_cgst_output_ledger_id')->default(0);
            $table->integer('default_sgst_output_ledger_id')->default(0);
            $table->integer('default_igst_output_ledger_id')->default(0);
            $table->integer('default_mismatch_income_id')->default(0);
            $table->integer('default_mismatch_expense_id')->default(0);
            $table->integer('round_off_id')->default(0);
            $table->integer('supplier_advance_ledger_id')->default(0);
            $table->integer('customer_advance_ledger_id')->default(0);
            $table->integer('tcs_ledger_id')->default(0);
            $table->integer('tds_ledger_id')->default(0);
            $table->double('phone_no')->default(0);
            $table->string('email', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->text('employee_ids')->nullable();
            $table->integer('default_other_charges_id')->default(0);
            $table->integer('default_transport_charges_id')->default(0);
            $table->integer('default_bouns_id')->default(0);
            $table->integer('default_cash_debit_ledger_id')->default(0);
            $table->integer('default_cash_credit_ledger_id')->default(0);
            $table->integer('default_bank_charges_ledger_id')->default(0);
            $table->integer('default_purchase_group_id')->default(0);
            $table->integer('default_sales_group_id')->default(0);
            $table->integer('temporary_ledger_id')->default(0);
            $table->integer('retention_amount_ledger_id')->default(0);
            $table->integer('salary_payable_ledger_id')->default(0);
            $table->integer('certificate_path')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
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
        Schema::dropIfExists('society_details');
    }
};
