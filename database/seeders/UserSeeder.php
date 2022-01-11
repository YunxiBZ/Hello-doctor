<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'administrator',
                'status' => 'active',
            ],
            [
                'email' => 'patient1@gmail.com',
                'password' => Hash::make('patient1'),
                'role' => 'patient',
                'status' => 'active',
            ],
            [
                'email' => 'patient2@gmail.com',
                'password' => Hash::make('patient2'),
                'role' => 'patient',
                'status' => 'active',
            ],
            [
                'email' => 'patient3@gmail.com',
                'password' => Hash::make('patient3'),
                'role' => 'patient',
                'status' => 'active',
            ],
            [
                'email' => 'patient4@gmail.com',
                'password' => Hash::make('patient4'),
                'role' => 'patient',
                'status' => 'active',
            ],
            [
                'email' => 'patient5@gmail.com',
                'password' => Hash::make('patient5'),
                'role' => 'patient',
                'status' => 'active',
            ],
            [
                'email' => 'patient6@gmail.com',
                'password' => Hash::make('patient6'),
                'role' => 'patient',
                'status' => 'active',
            ],
            [
                'email' => 'practitioner1@gmail.com',
                'password' => Hash::make('practitioner1'),
                'role' => 'practitioner',
                'status' => 'active',
            ],
            [
                'email' => 'practitioner2@gmail.com',
                'password' => Hash::make('practitioner2'),
                'role' => 'practitioner',
                'status' => 'active',
            ],
            [
                'email' => 'practitioner3@gmail.com',
                'password' => Hash::make('practitioner3'),
                'role' => 'practitioner',
                'status' => 'active',
            ],
            [
                'email' => 'practitioner4@gmail.com',
                'password' => Hash::make('practitioner4'),
                'role' => 'practitioner',
                'status' => 'active',
            ],
            [
                'email' => 'practitioner5@gmail.com',
                'password' => Hash::make('practitioner5'),
                'role' => 'practitioner',
                'status' => 'active',
            ],
            [
                'email' => 'practitioner6@gmail.com',
                'password' => Hash::make('practitioner6'),
                'role' => 'practitioner',
                'status' => 'active',
            ],
        ]);
    }
}
