<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            [
                "reason" => "Eos enim facilis nam fugit fuga non perferendis autem qui voluptas corrupti qui delectus porro At voluptatem veritatis qui odio maiores!",
                "meet_at" => "2022-01-13 16:00:00",
                "status" => "active",
                "patient_id" => 3,
                "practitioner_id" => 2
            ],
            [
                "reason" => "Lorem ipsum dolor sit amet. Quo magni soluta et magni possimus et dolores omnis qui porro sint.",
                "meet_at" => "2022-01-20 15:00:00",
                "status" => "active",
                "patient_id" => 3,
                "practitioner_id" => 3
            ],
            [
                "reason" => "Eum quas exercitationem aut repudiandae voluptate in eaque voluptatem ut incidunt deserunt!",
                "meet_at" => "2022-01-15 09:00:00",
                "status" => "active",
                "patient_id" => 4,
                "practitioner_id" => 1
            ],
            [
                "reason" => "Id galisum eveniet in dolor praesentium est quas libero et quae deserunt non modi dolorum id dicta galisum.",
                "meet_at" => "2022-01-15 10:00:00",
                "status" => "active",
                "patient_id" => 5,
                "practitioner_id" => 2
            ],
            [
                "reason" => "Sed iure quos aut placeat officia est dolorum pariatur. ",
                "meet_at" => "2022-01-14 11:00:00",
                "status" => "active",
                "patient_id" => 6,
                "practitioner_id" => 6
            ],
        ]);
    }
}
