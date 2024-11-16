<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
  
    public function definition(): array
    {
        return  [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'role' => fake()->randomElement(['user', 'admin']),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date()
        ];
    }

  
}
