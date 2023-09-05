<?php

namespace Database\Seeders;

use App\Models\LoanDue;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanDueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanDue::create([
            'loanId' => 1,
            'principalAmount' => 1000,
            'interestAmount' => 200,
            'paidPrincipalAmount' => 0,
            'paidInterestAmount' => 0,
            'remainingLoanPrincipalAmount' => 1000,
            'paid' => false,
            'demanded' => false,
            'paymentDate' => Carbon::now(),
        ]);

        $this->command->info('Loan Due seeded');
    }
}
