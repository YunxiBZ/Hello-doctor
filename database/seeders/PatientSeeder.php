<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'firstname' => 'Claire',
                'lastname' => 'Boisclair',
                'email' => 'patient1@gmail.com',
                'address' => '70 Avenue Millies Lacroix',
                'zipcode' => '95600',
                'city' => 'EAUBONNE',
                'user_id' => 2,
            ],
            [
                'firstname' => 'Marlon',
                'lastname' => 'Clavet',
                'email' => 'patient2@gmail.com',
                'address' => '26 avenue de Provence',
                'zipcode' => '26000',
                'city' => 'VALENCE',
                'user_id' => 3,
            ],
            [
                'firstname' => 'Charlot',
                'lastname' => 'LeBatelier',
                'email' => 'patient3@gmail.com',
                'address' => '58 rue Sadi Carnot',
                'zipcode' => '93300',
                'city' => 'AUBERVILLIERS',
                'user_id' => 4,
            ],
            [
                'firstname' => 'Ancelina',
                'lastname' => 'Barrette',
                'email' => 'patient4@gmail.com',
                'address' => '44 Square de la Couronne',
                'zipcode' => '91120',
                'city' => 'PALAISEAU',
                'user_id' => 5,
            ],
            [
                'firstname' => 'Grosvenor',
                'lastname' => 'Brochu',
                'email' => 'patient5@gmail.com',
                'address' => '21 rue Gontier-Patin',
                'zipcode' => '80100',
                'city' => 'ABBEVILLE',
                'user_id' => 6,
            ],
            [
                'firstname' => 'Suzette',
                'lastname' => 'Fréchette',
                'email' => 'patient6@gmail.com',
                'address' => '87 Rue du Palais',
                'zipcode' => '91150',
                'city' => 'ÉTAMPES',
                'user_id' => 7,
            ],
        ]);
    }
}
