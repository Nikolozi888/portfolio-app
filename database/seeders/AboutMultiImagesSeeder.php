<?php

namespace Database\Seeders;

use App\Models\AboutMultiImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutMultiImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutMultiImages::factory(7)->create();
    }
}
