<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'title' => 'I transform ideas into remarkable digital products',
            'experience' => '20+ years of experience in product design',
            'excerpt' => 'I specialize in UX/UI design, solving complex design problems to create intuitive user experiences. My goal is to craft seamless interfaces that enhance usability and engagement.',
            'description' => 'With over two decades of experience, I have honed my skills in UX/UI design, ensuring every product is both visually appealing and functionally effective. My expertise lies in understanding user behavior, designing seamless interactions, and creating intuitive interfaces.
             My passion for design goes beyond aesthetics—I focus on usability, accessibility, and innovation to enhance digital experiences. I thrive on solving design challenges and developing creative solutions that make interfaces more user-friendly and enjoyable.'
        ];
    }


}
