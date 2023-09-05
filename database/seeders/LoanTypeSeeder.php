<?php

namespace Database\Seeders;

use App\Models\LoanType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanType::create([
            'loan_type' => 'STL',
            'memberId' => 1,
            'sanctionDate' => Carbon::now(),
            'principalAmount' => 10000,
            'loanDurationInMonths' => 12,
            'interestRatePerAnnum' => 5,
            'interestAmount' => 500,
            'totalAmount' => 10500,
            'remainingTenureInMonths' => 6,
            'remainingPrincipalAmount' => 5000,
            'remainingInterestAmount' => 250,
            'status' => 'draft',
            'maximumNumberOfGuarantors' => 2,
            'minimumNumberOfGuarantors' => 1,
            'purposeOfLoan' => 'Home Renovation',
        ]);

        $this->command->info('Loan Type seeded');
    }
}
