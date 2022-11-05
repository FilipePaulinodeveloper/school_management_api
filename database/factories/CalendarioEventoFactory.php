<?php

namespace Database\Factories;

use App\Models\CalendarioEvento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CalendarioEvento>
 */
class CalendarioEventoFactory extends Factory
{      

    protected $model = CalendarioEvento ::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo_envento' => fake()->title(),
            'categoria' => $this->faker->lexify(1),
            'data_inicio' => fake()->date(),
            'data_termino' => fake()->date(),
            'dia_todo' => fake()->boolean(),
            'descricao' => fake()->text(100),
            'link' => fake()->text(200),
            
        ];
    }
}
