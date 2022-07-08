<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'filename' => $this->faker->word(),
            'type' => $this->faker->word(),
            'content' => $this->faker->realText(),
            'gist_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
