<?php

namespace Database\Seeders;

use App\Models\LoanGuarantors;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanGuarantorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanGuarantors::create([
            'memberId' => 1,
            'loanId' => 1,
            'fromDate' => Carbon::now(),
            'toDate' => Carbon::now()->addMonths(6),
        ]);

        $this->command->info('Loan Guarantor seeded');
    }
}
