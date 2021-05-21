<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand'             => $this->faker->word,
            'model'             => $this->faker->word,
            'color'             => $this->faker->colorName,
            'serialNumber'      => $this->faker->md5,
            'carRegistration'   => $this->faker->swiftBicNumber,
            'numberOfDoors'     => $this->faker->randomDigitNot(0,1,6,7,9),
            'numberOfSeats'     => $this->faker->randomDigitNot(0,1,3,5,7,9),
            'mileage'           => $this->faker->numberBetween($min = 1000, $max = 100000),
            'cylinderCapacity'  => $this->faker->randomDigitNot(0,1,3,5,7,9),
            'description'       => $this->faker->text($maxNbChars = 200),
            'comment'           => $this->faker->text($maxNbChars = 100),
            'available'         => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
        ];
    }
}
