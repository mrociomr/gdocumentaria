<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Administrado>
 */
class AdministradoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'dni' => $this->faker->randomNumber(8),
            'ap_paterno' => $this->faker->name(),
            'ap_materno' => $this->faker->name(),
            'direccion' => $this->faker->name(),
            'correo' => $this->faker->email(),
            'celular' => $this->faker->randomNumber(),
            'razon_social' => $this->faker->text(),
            // 'departamento' => $this->faker->name(),
        ];
    }
}
