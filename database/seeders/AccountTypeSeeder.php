<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed AccountTypes data
        AccountType::create([
            'account_type' => 'Accumulated Depreciation',
            'description' => 'A type of account for Accumulated Depreciation.',
        ]);

        $this->command->info('Account types seeded successfully.');
    }
}
