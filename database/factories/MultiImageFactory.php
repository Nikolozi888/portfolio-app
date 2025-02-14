<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MultiImage>
 */
class MultiImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'images' => implode(',', [
                'Frontend/assets/img/images/testi_img01.png',
                'Frontend/assets/img/images/testi_img02.png',
                'Frontend/assets/img/images/testi_img03.png',
                'Frontend/assets/img/images/testi_img04.png',
                'Frontend/assets/img/images/testi_img05.png',
                'Frontend/assets/img/images/testi_img06.png',
                'Frontend/assets/img/images/testi_img07.png',
            ]),
        ];
    }
}
