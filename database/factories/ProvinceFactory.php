<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Province>
 */
class ProvinceFactory extends Factory
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
            'ekatte' => fake()->unique()->numberBetween(100, 999),
            'code' => strtoupper(fake()->slug()),
            'name' => [
                'en' => fake()->city(),
                'bg' => fake()->city(),
            ],
            'description' => [
                'en' => fake()->sentence(),
                'bg' => fake()->sentence(),
            ],
        ];
    }
}
