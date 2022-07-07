<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(10, true),
            'description' => $this->faker->paragraph(4),
            'create_date' => date('Y-m-d H:i:s')
        ];
    }
}
