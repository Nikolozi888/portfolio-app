<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partners>
 */
class PartnersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'I proud to have collaborated with some awesome companies',
            'excerpt' => "I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own",
            'images' => implode(',', [
                'Frontend/assets/img/icons/partner_light01.png',
                'Frontend/assets/img/icons/partner_light02.png',
                'Frontend/assets/img/icons/partner_light03.png',
                'Frontend/assets/img/icons/partner_light04.png',
                'Frontend/assets/img/icons/partner_light05.png',
                'Frontend/assets/img/icons/partner_light06.png',
            ]),
        ];
    }
}
