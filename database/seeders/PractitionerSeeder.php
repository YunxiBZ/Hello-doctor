<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PractitionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practitioners')->insert([
            [
                'firstname' => 'Henri',
                'lastname' => 'Hervieux',
                'email' => 'practitioner1@gmail.com',
                'address' => '73 rue de Penthièvre',
                'zipcode' => '75010',
                'city' => 'PARIS',
                'user_id' => 8,
                'specialty_id' => 2
            ],
            [
                'firstname' => 'Joseph',
                'lastname' => 'Bergeron',
                'email' => 'practitioner2@gmail.com',
                'address' => '53 rue La Boétie',
                'zipcode' => '75013',
                'city' => 'PARIS',
                'user_id' => 9,
                'specialty_id' => 2
            ],
            [
                'firstname' => 'Pascaline',
                'lastname' => 'Ruais',
                'email' => 'practitioner3@gmail.com',
                'address' => '8 rue Goya',
                'zipcode' => '77350',
                'city' => 'LE MÉE-SUR-SEINE',
                'user_id' => 10,
                'specialty_id' => 2
            ],
            [
                'firstname' => 'Stéphane',
                'lastname' => 'Truchon',
                'email' => 'practitioner4@gmail.com',
                'address' => '22 avenue Ferdinand de Lesseps',
                'zipcode' => '38000',
                'city' => 'GRENOBLE',
                'user_id' => 11,
                'specialty_id' => 1
            ],
            [
                'firstname' => 'Belle',
                'lastname' => 'Sirois',
                'email' => 'practitioner5@gmail.com',
                'address' => '74 Square de la Couronne',
                'zipcode' => '75001',
                'city' => 'PARIS',
                'user_id' => 12,
                'specialty_id' => 3
            ],
            [
                'firstname' => 'Mason',
                'lastname' => 'LaGarde',
                'email' => 'practitioner6@gmail.com',
                'address' => '12 avenue de Provence',
                'zipcode' => '59300',
                'city' => 'VALENCIENNES',
                'user_id' => 13,
                'specialty_id' => 4
            ],
        ]);
    }
}
