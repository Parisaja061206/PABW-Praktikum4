<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Innovation;
use Faker\Factory as Faker;

class InnovationSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Buat data kategori awal
        $categories = ['Infrastruktur', 'Lingkungan', 'Transportasi', 'Keamanan Publik'];
        foreach ($categories as $cat) {
            Category::create(['name' => $cat]);
        }

        // Buat 10 data dummy inovasi warga menggunakan Faker
        for ($i = 0; $i < 10; $i++) {
            Innovation::create([
                'category_id' => $faker->numberBetween(1, 4),
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(2),
                'status' => $faker->randomElement(['Pending', 'Disetujui', 'Diproses']),
            ]);
        }
    }
}