<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
        $password = 'L7zkD6DKgK';
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        return [
            'name' => "Admin",
            'email' => "superadmin@admin.com",
            'email_verified_at' => now(),
            'password' => $hashed_password,
            'remember_token' => Str::random(10),
            'is_admin' => true,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
