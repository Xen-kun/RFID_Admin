<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'id' => 1,
                'rfid' => '0795337150',
                'surname' => 'John',
                'firstname' => 'Smith',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1231',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 2,
                'rfid' => '0402157081',
                'surname' => 'Jane',
                'firstname' => 'Doe',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1232',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 3,
                'rfid' => '0624773987',
                'surname' => 'Michael',
                'firstname' => 'Johnson',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1233',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 4,
                'rfid' => '0917398721',
                'surname' => 'Emily',
                'firstname' => 'Davis',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1234',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 5,
                'rfid' => '0712671678',
                'surname' => 'Robert',
                'firstname' => 'Brown',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1235',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 6,
                'rfid' => '0811162256',
                'surname' => 'Linda',
                'firstname' => 'Miller',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1236',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 7,
                'rfid' => '0917796278',
                'surname' => 'William',
                'firstname' => 'Wilson',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1237',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 8,
                'rfid' => '0155494652',
                'surname' => 'Patricia',
                'firstname' => 'Moore',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1238',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 9,
                'rfid' => '0024084460',
                'surname' => 'Charles',
                'firstname' => 'Taylor',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1239',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ],
            [
                'id' => 10,
                'rfid' => '0653938372',
                'surname' => 'Barbara',
                'firstname' => 'Anderson',
                'middlename' => null,
                'ext' => null,
                'idnumber' => 'NI-1244',
                'created_at' => '2024-06-14 06:49:25',
                'updated_at' => '2024-06-14 06:31:05',
            ]
        ]);
    }
}
