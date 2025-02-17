<?php

namespace Database\Seeders;

use App\Models\PartnerMultiImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerMultiImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartnerMultiImages::factory(7)->create();
    }
}
