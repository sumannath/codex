<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'file_type_id' => $this->faker->numberBetween(1, 2),
            'parent_file_id' => null,
            'name' => $this->faker->word(),
            'size' => $this->faker->randomNumber(9, false) * $this->faker->randomNumber(3, false),
            'description' => $this->faker->paragraph()
        ];
    }
}
