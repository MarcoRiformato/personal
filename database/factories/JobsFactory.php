<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titolo' => fake()->jobTitle(),
            'paga' => fake()->randomDigit(),
            'descrizione' => fake()->realTextBetween(5,20),
            'localita' => fake()->city()
        ];
    }
}

/*
    $table->string('titolo');
    $table->integer('paga');
    $table->text('descrizione');
    $table->string('localita');
*/