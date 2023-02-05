<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventori>
 */
class InventoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_barang' => fake()->sentence(1),
            'merk' => fake()->sentence(1),
            'bahan' => fake()->sentence(1),
            'tgl_perolehan' => fake()->year(),
            'asal_usul' => fake()->sentence(1),
            'kondisi' => fake()->sentence(1),
            'jumlah' => fake()->numberBetween(1),
            'kap_barang' => fake()->randomNumber()
        ];
    }
}
