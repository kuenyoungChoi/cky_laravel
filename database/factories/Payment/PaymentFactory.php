<?php

namespace Database\Factories\Payment;

use App\Models\Payment\Payment;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Payment::class;

    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'user_id' => User::inRandomOrder()->first()->id,

        ];
    }
}
