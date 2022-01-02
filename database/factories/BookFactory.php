<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3,5)),
            'slug' => $this->faker->slug(),
            'writer' => $this->faker->name(),
            'synopsis' => $this->faker->paragraphs(3,true),
            'publication_year' => $this->faker->year(),
            'number_of_pages' => $this->faker->numberBetween(200,500),
            'category_id' => $this->faker->mt_rand(1,3)
        ];
    }
}
