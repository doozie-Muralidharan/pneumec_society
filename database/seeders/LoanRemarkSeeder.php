<?php

namespace Database\Seeders;

use App\Models\LoanRemark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanRemarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanRemark::create([
            'loanId' => 1,
            'status_from' => 'draft',
            'status_to' => 'draft',
            'remark' => 'dummy remark'
        ]);

        $this->command->info('LoadRemark seeded');
    }
}
