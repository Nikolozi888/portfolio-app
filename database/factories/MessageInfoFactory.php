<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MessageInfo>
 */
class MessageInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Any questions? Feel free to contact',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
            'email' => 'Info@webmail.com',
        ];
    }
}
