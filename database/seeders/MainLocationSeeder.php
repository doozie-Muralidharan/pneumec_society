<?php

namespace Database\Seeders;

use App\Models\MainLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MainLocation::create([
            "companyId" => 1,
            "name" => "Kengeri"
        ]);
    }
}
