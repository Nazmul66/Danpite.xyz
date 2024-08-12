<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Information;

class termsAndConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::create([
            'id' => 1,
            'small_title' => 'Express way',
            'main_title' => 'Express way',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis veniam odio vitae quia, similique voluptatum deserunt aut ab doloribus quod placeat aliquid praesentium libero.',
            'url' => '/',
        ]);
    }
}
