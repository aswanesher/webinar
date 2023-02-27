<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::insert([
            [
                'name' => 'Rivaldi Pratama',
                'activity' => 'UI Design at Giza Lab',
                'testimony' => 'Mengikuti kegiatan bootcamp di Giza Lab mantap banget, Kegiatannya sangat seru dan isi materinya daging wagyu semua.',
                'testimony_image' => 'https://via.placeholder.com/312x416',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Riko Aditya',
                'activity' => 'Frontend Developer at Giza Lab',
                'testimony' => 'Mengikuti kegiatan bootcamp di Giza Lab mantap banget, Kegiatannya sangat seru dan isi materinya daging wagyu semua.',
                'testimony_image' => 'https://via.placeholder.com/312x416',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Arfan Maulana',
                'activity' => 'Backend Developer at Giza Lab',
                'testimony' => 'Mengikuti kegiatan bootcamp di Giza Lab mantap banget, Kegiatannya sangat seru dan isi materinya daging wagyu semua.',
                'testimony_image' => 'https://via.placeholder.com/312x416',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
