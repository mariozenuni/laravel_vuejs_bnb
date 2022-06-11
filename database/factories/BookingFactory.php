<?php

namespace Database\Factories;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from'=>Carbon::instance($this->faker->dateTimeBetween('-1 months','+1 months')),
            'to'=>Carbon::instance($this->faker->dateTimeBetween('-1 months','+1 months'))->addDAys(random_int(0,14)),
        ];
    }
}
