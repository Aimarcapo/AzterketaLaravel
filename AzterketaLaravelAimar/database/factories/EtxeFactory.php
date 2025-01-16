<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etxe>
 */
class EtxeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'helbidea' => $this->faker->address(),
            'logelak' => $this->faker->numberBetween(1, 5),
            'eraikuntza_urtea' => $this->faker->year(),
        ];
    }
}
