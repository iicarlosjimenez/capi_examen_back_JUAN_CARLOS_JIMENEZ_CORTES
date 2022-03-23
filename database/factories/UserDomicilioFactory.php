<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Provider\en_UG\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'domicilio' => $this->faker->streetName(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'colonia' => $this->faker->streetName(),
            'cp' => Address::postcode(),
            'ciudad' => $this->faker->city(),
        ];
    }
}
