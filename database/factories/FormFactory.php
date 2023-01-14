<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormFactory extends Factory
{
    public function definition()
    {
        return [
            'person' => fake() -> name(),
            'email' => fake() -> email(),
            'phone_number' => fake() -> phoneNumber(),
            'educational_institution' => fake() -> catchPhrase(),
            'motivational_letter' => fake() -> bs(),
            'image' => 'sliga.png'
        ];
    }
}
