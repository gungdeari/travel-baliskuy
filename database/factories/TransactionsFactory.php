<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->id,
            'travel_packages_id' => $this->faker->travel_packages_id,
            'users_id' => $this->faker->users_id,
            'additional_visa' => $this->faker->additional_visa,
            'transaction_total' => $this->faker->transaction_total,
            'transaction_status' => $this->faker->transaction_status,
            'deleted_at' => $this->faker->deleted_at,
            'created_at' => $this->faker->created_at,
            'updated_at' => $this->faker->updated_at,
        ];
    }
}
