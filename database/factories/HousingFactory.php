<?php

namespace Database\Factories;

use App\Models\User;
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
            'nome' => 'Zulia',
            'descrizione' => 'Affitto stanza per studenti: Ampia camera arredata con letto singolo, scrivania, sedia e armadio. Bagno in comune con un altra persona. Cucina condivisa completamente attrezzata e zona soggiorno con TV. Connessione internet veloce e inclusa nel prezzo. A pochi passi dalla fermata del bus e da negozi di alimentari',
            'costo' => '300',
            'city' => 'Grosseto',
            'numero_telefono' => '3885686658',
            'stato_annuncio' => 'disponibile',
            'user_id' => User::pluck('id')->random(),
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
