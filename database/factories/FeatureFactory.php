<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Feature>
 */
class FeatureFactory extends Factory
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
