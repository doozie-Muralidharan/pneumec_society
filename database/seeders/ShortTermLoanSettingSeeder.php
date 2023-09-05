<?php

namespace Database\Seeders;

use App\Models\ShortTermLoanSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShortTermLoanSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShortTermLoanSetting::create([
            'short_term_loan_interest' => '100',
            'min_loan_amount' => '500',
            'max_loan_amount' => '1000',
        ]);

        $this->command->info('Short Term Loan Setting seeded succesfully');
    }
}
