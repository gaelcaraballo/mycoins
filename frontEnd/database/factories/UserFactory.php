<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nickname' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('1234'),
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'avatar' => 'icon.png',
            'country_id' => fake()->randomElement(Country::all('id')), //Country::all('id')
            //'collection_id' => fake()->unique()->randomNumber(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
