<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alokairu>
 */
class AlokairuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {  $etxes = \App\Models\Etxe::pluck('id')->toArray();
        return [
            'alokatzailea' => $this->faker->sentence,
            'etxe_id' => $this->faker->randomElement($etxes),     
        ];
    }
}
