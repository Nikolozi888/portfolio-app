<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\AssignRef;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(InfoSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(MultiImagesSeeder::class);
        $this->call(AddressInfoSeeder::class);
        $this->call(ContactInfoSeeder::class);
        $this->call(MessageInfoSeeder::class);
        $this->call(PartnerMultiImagesSeeder::class);
        $this->call(SocialInfoSeeder::class);
        $this->call(AboutMultiImagesSeeder::class);
        $this->call(UserSeeder::class);
    }
}
