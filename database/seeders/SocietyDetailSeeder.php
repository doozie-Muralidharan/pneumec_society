<?php

namespace Database\Seeders;

use App\Models\SocietyDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocietyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocietyDetail::create([
            'name' => 'Anusha Charitable Foundation',
            'abbrevation' => '',
            'domain' => '',
            'default_letter_head' => '',
            'country_id' => 101,
            'state_id' => 17,
            'logo_path' => 'pwf/image/company/1562682107-logo.png',
            'certificate' => '',
            'pan_number' => '',
            'gst_number' => '',
            'default_holiday_list' => '',
            'create_chart_of_accounts_based_on' => '',
            'default_terms' => '',
            'chart_of_accounts_template' => '',
            'default_currency' => '',
            'default_payable_account_id' => '176',
            'default_cash_account_id' => '236',
            'default_cost_of_goods_sold_account_id' => '124',
            'default_receivable_account_id' => '45',
            'default_income_account_id' => '56',
            'round_off_account_id' => '56',
            'default_payroll_payable_account_id' => '54',
            'write_off_account_id' => '89',
            'round_off_cost_center_id' => '25',
            'exchange_gain_loss_account_id' => '21',
            'default_bank_account_id' => '85',
            'default_stock_in_hand' => '',
            'accumulated_depreciation_account_id' => '45',
            'gain_loss_account_on_asset_disposal_id' => '58',
            'depreciation_expense_account_id' => '85',
            'asset_depreciation_cost_center_id' => '14',
            'default_employee_advance_id' => '85',
            'salary_advance_id' => '25',
            'default_bank_group_id' => '35',
            'default_bank_ledger_id' => '41',
            'default_tax_group_id' => '63',
            'default_tax_ledger_id' => '58',
            'default_ledger_setapart_id' => '23',
            'default_cgst_input_ledger_id' => '23',
            'default_sgst_input_ledger_id' => '78',
            'default_igst_input_ledger_id' => '25',
            'default_cgst_output_ledger_id' => '89',
            'default_sgst_output_ledger_id' => '56',
            'default_igst_output_ledger_id' => '12',
            'default_mismatch_income_id' => '96',
            'default_mismatch_expense_id' => '9',
            'round_off_id' => '5',
            'supplier_advance_ledger_id' => '8',
            'customer_advance_ledger_id' => '125',
            'tcs_ledger_id' => '45',
            'tds_ledger_id' => '25',
            'phone_no' => '8105021151',
            'email' => 'info@anushafoundation.org',
            'website' => 'http://www.anushafoundation.org',
            'address' => '#112, Anu-Pratham, 4th Cross, 9th Main, NTI Layout, <br>Vidyaranyapura, Bangalore – 560097',
            'employee_ids' => '',
            'default_other_charges_id' => '184',
            'default_transport_charges_id' => '43',
            'default_bouns_id' => '192',
            'default_cash_debit_ledger_id' => '25',
            'default_cash_credit_ledger_id' => '47',
            'default_bank_charges_ledger_id' => '69',
            'default_purchase_group_id' => '52',
            'default_sales_group_id' => '41',
            'temporary_ledger_id' => '26',
            'retention_amount_ledger_id' => '58',
            'salary_payable_ledger_id' => '36',
            'certificate_path' => 0,
            'created_by' => '1',
            'updated_by' => '0'
        ]);
    }
}
