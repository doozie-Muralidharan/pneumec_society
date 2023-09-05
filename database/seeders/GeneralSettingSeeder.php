<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'registration_share_amnount' => '100',
            'registration_amount' => '500',
            'share_fee' => '50',
            'compulsory_deposit_amount' => '200',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->command->info('General Setting seeded successfully.');

    }
}
