<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sentence>
 */
class SentenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => $this->faker->name,
            'value' => $this->faker->sentence,
            'book' => $this->faker->title,
            'page' => $this->faker->numberBetween(1, 500),
            'chapter' => $this->faker->numberBetween(1, 20),
        ];
    }
}
