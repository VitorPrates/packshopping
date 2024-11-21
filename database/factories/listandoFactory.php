<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listando>
 */
class listandoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Titulo' => $this -> faker -> name(),
            'tags' => 'laravel, api, backend, toasts',
            'empresa' => $this -> faker -> company(),
            'email' => $this -> faker -> companyEmail(),
            'website' => $this -> faker -> url(),
            'local' => $this -> faker -> city(),
            'descri' => $this -> faker -> paragraph(5),
        ];
    }
}
