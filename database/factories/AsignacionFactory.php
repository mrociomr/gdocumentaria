<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asignacion>
 */
class AsignacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::first();
        return [
            'user_id' => $user,
            'rol_id' => $this->faker->name(),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
        ];
    }
}
