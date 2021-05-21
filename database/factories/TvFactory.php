<?php

namespace Database\Factories;

use App\Models\Tv;
use Illuminate\Database\Eloquent\Factories\Factory;

class TvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tv::class;

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
            'inch'              => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
            'hz'                => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
            'type'              => $this->faker->word,
            'year'              => $this->faker->numberBetween($min = 2009, $max = 2021),
            'system'            => $this->faker->word,        
            'wifi'              => $this->faker->word,
            'description'       => $this->faker->text($maxNbChars = 200),
            'comment'           => $this->faker->text($maxNbChars = 100),
            'available'         => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
        ];
    }
}
