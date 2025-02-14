<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'I will give you Best Product in the shortest time',
            'excerpt' => "I'm a Rasalina-based product design & visual designer focused on crafting clean & user-friendly experiences",
            'video' => '',
            'image' => 'Frontend/assets/img/banner/banner_img.png'
        ];
    }
}
