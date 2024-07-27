<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produtos>
 */
class produtosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // 'Capa' => $this -> faker -> imageUrl($width = 200, $height = 200),
            'Titulo' => $this -> faker -> word(),
            'Preco' => $this -> faker -> numberBetween($min = 10, $max = 6000),
            'Descri' => $this -> faker -> paragraph(5)
        ];
    }
}
