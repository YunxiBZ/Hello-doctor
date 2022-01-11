<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialties')->insert([
            [
                'name' => 'Chirurgien-dentiste',
            ],
            [
                'name' => 'Médecin généraliste',
            ],
            [
                'name' => 'Pédiatre',
            ],
            [
                'name' => 'Gynécologue',
            ],
            [
                'name' => 'Ophtalmologue',
            ],
            [
                'name' => 'Dermatologue',
            ],
            [
                'name' => 'Ostéopathe',
            ],
            [
                'name' => 'Masseur-kinésithérapeute',
            ],
            [
                'name' => 'Opticien',
            ],
            [
                'name' => 'Pédicure-podologue',
            ],
        ]);
    }
}
