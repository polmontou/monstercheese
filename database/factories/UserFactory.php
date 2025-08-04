<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'firstname' => $this->faker->firstname(),
            'lastname' =>$this->faker->lastname(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' =>$this->faker->phoneNumber(),
            'phone_number' =>$this->faker->phoneNumber(),
        ];
    }
}

