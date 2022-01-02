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

    public function staticCategoryProgramming()
    {
        return $this->state( function (array $attributes)
        {
           return [
                'name' => 'Programming'
           ];
        });
    }
    public function staticCategoryPersonal()
    {
        return $this->state( function (array $attributes)
        {
           return [
                'name' => 'Personal'
           ];
        });
    }
    public function staticCategoryNetworking()
    {
        return $this->state( function (array $attributes)
        {
           return [
                'name' => 'Networking'
           ];
        });
    }
}
