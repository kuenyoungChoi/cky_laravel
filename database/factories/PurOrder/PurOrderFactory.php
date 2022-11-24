<?php

namespace Database\Factories\PurOrder;

use App\Models\PurOrder\PurOrder;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PurOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PurOrder::class;

    public function definition()
    {
        return [
//            'orderable_type' => $this->faker->randomElement,
//            'orderable_id' =>
//            'orderer_type' => $this->faker->randomElement,
//            'orderer_id' => $this->inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
