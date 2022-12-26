<?php

namespace Database\Factories\Prod;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prod\Prod>
 */
class ProdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => strtoupper($this->faker->slug(1)),
            'cost' => $this->faker->numberBetween(200 ,1000) * 10000
        ];
    }
}
