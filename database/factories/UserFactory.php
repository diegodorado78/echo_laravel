<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'image'=> $this->faker->imageUrl(1280,720),
            'profile_photo_path'=> $this->faker->imageUrl(1280,720),
            'phone'=> $this->faker->phoneNumber,
            'address'=> $this->faker->address,
            'birthday'=> $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'score'=>$this->faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5), // 48.8932
            'city'=>$this->faker->city()
        ];
    }
}
