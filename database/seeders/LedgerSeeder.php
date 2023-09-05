<?php

namespace Database\Seeders;

use App\Models\Ledger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LedgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ledger::create([
            'ledger_name' => 'Ledger 1',
            'group_id' => 1,
            'account_type_id' => 1,
            'frozen' => 0,
            'balance_must_be' => 0,
            'description' => 'Description for Ledger 1',
            'editable_flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        $this->command->info('Ledger seeded');
    }
}
