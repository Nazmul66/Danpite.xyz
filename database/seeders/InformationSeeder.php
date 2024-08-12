<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Information;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'key' => 'about_us',
              ],
              [
                'id' => 2,
                'key' => 'contact_us',
              ],
              [
                'id' => 3,
                'key' => 'terms_codition',
              ],
              [
                'id' => 4,
                'key' => 'privacy_policy',
              ],
              [
                'id' => 5,
                'key' => 'faq',
              ],
        ];

        Information::insert($data);
    }
}
