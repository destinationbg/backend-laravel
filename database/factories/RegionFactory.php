<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Region>
 */
class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'color' => fake()->hexColor(),
            'title' => [
                'en' => fake('en_US')->sentence(),
                'bg' => fake('bg_BG')->sentence(),
            ],
            'description' => [
                'en' => fake('en_US')->text(),
                'bg' => fake('bg_BG')->text(),
            ],
        ];
    }
}
