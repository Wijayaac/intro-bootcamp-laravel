<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "isbn" => fake()->isbn13(),
            "title" => fake()->words(5, true),
            "author" => fake()->name(),
            "image_path" => fake()->imageUrl(),
            "publisher" => fake()->company(),
            "category" => fake()->colorName(),
            "pages" => rand(20, 240),
            "language" => fake()->countryCode(),
            "publish_date" => fake()->date(),
            "subjects" => fake()->text(40),
            "desc" => fake()->text(400),
        ];
    }
}
