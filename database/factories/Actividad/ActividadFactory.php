<?php

namespace Database\Factories\Actividad;

use App\Models\Actividad\Actividad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actividad\Actividad>
 */
class ActividadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Actividad::class;

    public function definition()
    {
        return [
            /*
        'name' => $this->faker->sentence(),
        'descripcion' => $this->faker->paragraph(),
        'categoria' => $this->faker->randomElement(['Desarrollo web','Diseño web']),
        */
            //
        ];
    }
}
