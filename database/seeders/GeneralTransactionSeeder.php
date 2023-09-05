<?php

namespace Database\Seeders;

use App\Models\GeneralTransaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GeneralTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed general transactions data
        GeneralTransaction::create([
            'project_detail_id' => 1,
            'financial_year_id' => 2023,
            'party_type' => 1,
            'party_id' => 1,
            'type' => 1,
            'source_id' => 1,
            'voucher_no' => 'VT001',
            'voucher_date' => '2023-08-24',
            'transaction_date' => Carbon::now(),
            'narration' => 'Sample transaction',
            'ledger_id' => 1,
            'opening_balance_debits' => 0,
            'opening_balance_credits' => 0,
            'debits' => 1000,
            'credits' => 0,
            'closing_balance' => 1000,
            'isConfirmed' => 0,
            'created_by' => 1,
        ]);

        // Add more seed data as needed

        // Output success message
        $this->command->info('General Transactions seeded successfully.');
    }
}
