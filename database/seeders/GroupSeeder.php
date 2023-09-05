<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed groups data
        Group::create([
            'group_name' => 'Group A',
            'parent' => null,
            'alias' => 'Alias A',
            'description' => 'Description for Group A',
            'nature_of_accounts_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // Add more seed data as needed

        // Output success message
        $this->command->info('Groups seeded successfully.');
    }
}
