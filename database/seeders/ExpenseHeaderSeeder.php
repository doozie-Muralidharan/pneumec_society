<?php

namespace Database\Seeders;

use App\Models\ExpenseHeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseHeader::create([
            'name' => 'Sample Expense Header',
            'code' => 'EXP-001',
            'description' => 'This is a sample expense header.',
        ]);

        $this->command->info('Expense Header Seeded');
    }
}
