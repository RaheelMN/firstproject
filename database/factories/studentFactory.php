<?php

namespace Database\Factories;

use Faker\Provider\en_PH\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->city(),
            'email'=>fake()->unique()->email(),
            'age'=>fake()->numberBetween(20,40),
            'address'=>fake()->address(),
            'password'=>fake()->password(),
            'phone'=>fake()->PhoneNumber(),
            'city'=>rand(1,10)
        ];
    }
}
