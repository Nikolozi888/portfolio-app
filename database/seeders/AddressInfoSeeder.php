<?php

namespace Database\Seeders;

use App\Models\AddressInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AddressInfo::factory(1)->create();
    }
}
