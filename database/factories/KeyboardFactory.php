<?php

namespace Database\Factories;

use App\Models\Keyboard;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeyboardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Keyboard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand'             => $this->faker->word,
            'model'             => $this->faker->swiftBicNumber,
            'keycap'            => $this->faker->word,
            'form'              => $this->faker->word,
            'type'              => $this->faker->word,
            'year'              => $this->faker->numberBetween($min = 2009, $max = 2021),
            'ckey'              => $this->faker->numberBetween($min = 90, $max = 140),        
            'rgb'               => $this->faker->word,
            'description'       => $this->faker->text($maxNbChars = 200),
            'comment'           => $this->faker->text($maxNbChars = 100),
            'available'         => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
        ];
    }
}
