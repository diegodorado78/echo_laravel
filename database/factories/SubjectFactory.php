<?php

namespace Database\Factories;

use App\Models\subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'description' => $this->faker->text(150),
            'image'=> $this->faker->imageUrl(1280,720),
        ];
    }
}
