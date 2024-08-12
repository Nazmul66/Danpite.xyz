<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BasicInfo;

class BasicInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BasicInfo::create([
            'id' => 1,
            'phone' => 'John',
            'email' => 'admin@gmail.com',
            'address' => 'orem ipsum, dolor sit amet consectetur adipisicing elit. Labore accusantium,',
        ]);
    }

}
