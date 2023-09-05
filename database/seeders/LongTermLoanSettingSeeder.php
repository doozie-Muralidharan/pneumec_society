<?php

namespace Database\Seeders;

use App\Models\LongTermLoanSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LongTermLoanSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LongTermLoanSetting::create([
            'long_term_loan_interest' => '9',
            'min_loan_amount' => '1000',
            'max_loan_amount' => '90000',
            'number_of_guarantors' => '2'
        ]);

        $this->command->info('LongTern Setting seeded successfully');
    }
}
