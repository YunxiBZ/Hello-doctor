<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SpecialtySeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PractitionerSeeder;
use Database\Seeders\PatientSeeder;
use Database\Seeders\AppointmentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SpecialtySeeder::class,
            UserSeeder::class,
            PractitionerSeeder::class,
            PatientSeeder::class,
            AppointmentSeeder::class,
        ]);
    }
}
