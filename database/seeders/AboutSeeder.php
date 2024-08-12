<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'id' => 1,
            'title' => 'Express way',
            'description' => 'orem ipsum, dolor sit amet consectetur adipisicing elit. Labore accusantium,',
        ]);
    }
}
