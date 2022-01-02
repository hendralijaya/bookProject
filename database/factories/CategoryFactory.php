<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
        ];
    }

    public function staticCategory()
    {
        return $this->state( function (array $attributes)
        {
           return [
                'name' => 'Programming'
           ];
        });
    }
}
