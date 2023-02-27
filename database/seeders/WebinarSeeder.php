<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Webinar;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Webinar::insert([
            [
                'title' => 'Basic of UX Writing - Module 101',
                'category_id' => 1,
                'level' => 'intermediate',
                'mentor_name' => 'Evan Gilang, Annisa Nur, Evira Tiffany',
                'maximum_student' => 100,
                'end_date' => '2023-02-28 10:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Perkenalan UX Design',
                'category_id' => 1,
                'level' => 'intermediate',
                'mentor_name' => 'Evan Gilang, Annisa Nur, Evira Tiffany',
                'maximum_student' => 100,
                'end_date' => '2023-02-28 10:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Perkenalan UX Design  - Module 303 Lorem Ipsum',
                'category_id' => 1,
                'level' => 'intermediate',
                'mentor_name' => 'Evan Gilang, Annisa Nur, Evira Tiffany',
                'maximum_student' => 100,
                'end_date' => '2023-02-28 10:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
