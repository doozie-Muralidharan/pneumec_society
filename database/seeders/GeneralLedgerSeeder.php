<?php

namespace Database\Seeders;

use App\Models\GeneralLedger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralLedgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed general ledgers data
        GeneralLedger::create([
            'financial_year_id' => 2023,
            'ledger_id' => 1,
            'opening_balance_debits' => 0,
            'opening_balance_credits' => 0,
            'debits' => 1000,
            'credits' => 0,
            'closing_balance' => 1000,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // Add more seed data as needed

        // Output success message
        $this->command->info('General Ledgers seeded successfully.');
    }
}
