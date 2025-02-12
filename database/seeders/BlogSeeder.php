<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Best website traffic Booster with great tools',
            'image' => '',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.

            Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.

            It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers, and achieve the desired ends of the business.

            In business, it is the long-range sketch of the desired image, direction, and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of...',

            'excerpt' => 'A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthen performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends.',

            'category_id' => '1',
            'tag_id' => '1',
            'author' => 'Halina Spond'
        ]);
    }
}
