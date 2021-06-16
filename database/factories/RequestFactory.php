<?php

namespace Database\Factories;

use App\Models\Request;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Request::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject_name' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
            'fare' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'payment_method'=> $this->faker->word($nb = 2, $asText = false) ,
            'site'=> $this->faker->word($nb = 2, $asText = false),
        ];
    }
}
