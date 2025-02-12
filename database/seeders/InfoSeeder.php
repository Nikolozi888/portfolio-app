<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::create([
            'title' => 'I will give you Best Product in the shortest time',
            'excerpt' => "I'm a Rasalina-based product design & visual designer focused on crafting clean & user-friendly experiences",
            'video' => '',
            'image' => ''
        ]);
    }

}
