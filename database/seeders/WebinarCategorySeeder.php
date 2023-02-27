<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WebinarCategory;

class WebinarCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebinarCategory::insert([
            [
                'title' => 'UX Design',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'UX Writting',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Research',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Product Design',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'UI Design',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Interaction Design',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
