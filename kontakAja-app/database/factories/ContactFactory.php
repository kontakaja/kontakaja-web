<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1, 4),
            'user_id' => '1',
            'name' => fake()->name(mt_rand(5, 30)),
            'phone_number' => fake()->phoneNumber(mt_rand(10, 12)),
            'email' => fake()->unique()->freeEmail(),
            'address' => fake()->address()
        ];
    }
}
