<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Best website traffic Booster with great tools',
            'image' => 'Frontend/assets/img/blog/blog_post_thumb01.jpg',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.
            Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.
            It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers, and achieve the desired ends of the business.
            In business, it is the long-range sketch of the desired image, direction, and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of...',
            'excerpt' => 'A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthen performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends.',
            'category_id' => 1,
            'tag_id' => 1,
            'author' => 'Halina Spond',
        ];
    }
}
