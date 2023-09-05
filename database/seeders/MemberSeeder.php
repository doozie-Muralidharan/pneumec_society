<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'userId' => 1,
            'memberId' => null,
            'status' => 'draft',
            'applicationStatus' => 'Approved without any conditions',
            'applicationRemarks' => 'remark content',
            'name' => 'John Doe',
            'fatherName' => 'Michael Doe',
            'gender' => 'male',
            'religion' => 'hindhu',
            'caste' => 'General',
            'phoneNumber' => '1234567890',
            'externalReferenceNumber' => 'EXT123',
            'permanentAddress' => '123 Main St, City',
            'temporaryAddress' => '456 Temporary St, City',
            'aadharNumber' => '123456789012',
            'aadharUrl' => 'https://example.com/aadhar.jpg',
            'panNumber' => 'ABCDE1234F',
            'panUrl' => 'https://example.com/pan.jpg',
            'companyId' => 1,
            'officeId' => 1,
            'mainLocationId' => 1,
            'locationId' => 1,
            'department' => 'Engineering',
            'designation' => 'Software Engineer',
            'bankDetails' => json_encode(['bank_name' => 'ABC Bank', 'account_number' => '1234567890']),
            'nominee' => json_encode(['name' => 'Jane Doe', 'relation' => 'Spouse']),
        ]);

        $this->command->info('Member seeded successfully.');
    }
}
