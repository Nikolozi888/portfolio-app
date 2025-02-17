<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AddressInfo>
 */
class AddressInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'MY ADDRESS',
            'country' => 'AUSTRALIA',
            'description' => 'Level 13, 2 Elizabeth Steereyt set Melbourne, Victoria 3000',
            'email' => 'noreply@envato.com',
        ];
    }
}
