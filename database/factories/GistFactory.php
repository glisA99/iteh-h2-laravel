<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'url' => $this->faker->url(),
            'description' => $this->faker->realText(),
            'author_id' => $this->faker->numberBetween(1,10),
            'comments' => $this->faker->numberBetween(0,10),
            'issues' => $this->faker->numberBetween(0,10)
        ];
    }
}
