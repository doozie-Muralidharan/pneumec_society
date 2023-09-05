<?php

namespace Database\Seeders;

use App\Models\ExpenseEntry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseEntry::create([
            'financial_year_id' => 1,
            'paid_from_id' => 1,
            'paid_to' => 'Sample Recipient',
            'voucher_number' => 1001,
            'voucher_date' => now(),
            'expense_date' => now(),
            'mode_of_payment' => 1,
            'expense_type' => 1,
            'type' => 1,
            'cheque_ref_id' => 'CHEQUE-001',
            'cheque_ref_date' => now(),
            'project_details_id' => 1,
            'bill_no' => 'BILL-001',
            'attachment' => 'sample_attachment.pdf',
            'narration' => 'This is a sample expense entry.',
            'outward_petty_cash_id' => 1,
            'confirm_flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'confirmed_by' => 1,
            'confirmed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->command->info('Expense Entry Seeded');
    }
}
