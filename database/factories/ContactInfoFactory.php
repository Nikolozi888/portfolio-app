<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactInfo>
 */
class ContactInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'CONTACT US',
            'number' => '81383 766 284',
            'description' => 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here'
        ];
    }
}
