<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Housing>
 */
class HousingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'descrizione' => fake()->realTextBetween(5,20),
            'costo' => fake()->randomDigit(),
            'city' => fake()->city(),
            'numero_telefono' => fake()->randomNumber(),
            'stato_annuncio' => 'disponibile'
        ];
    }
}
/* 
    $table->string('stato_annuncio');
    $table->text('descrizione');
    $table->string('costo')->nullable();
    $table->string('city');
    $table->integer('numero_telefono')->nullable();
*/
