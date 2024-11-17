<?php

namespace Database\Factories;

use App\Models\Group;
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
        $group_id = Group::inRandomOrder()->first();
        return  [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'role' => fake()->randomElement(['user', 'admin']),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'groups_id' => $group_id->id
            
        ];
    }

  
}
