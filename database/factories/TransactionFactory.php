<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'amount' => $this->faker->numberBetween(100, 20000),
            'user_id' => User::factory(),
            'customer_id' => Customer::factory(),
            'created_at' => $this->faker->dateTimeThisDecade(),
        ];
    }
}