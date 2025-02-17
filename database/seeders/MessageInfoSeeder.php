<?php

namespace Database\Seeders;

use App\Models\MessageInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MessageInfo::factory(1)->create();
    }
}
