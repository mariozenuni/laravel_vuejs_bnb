<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  Illuminate\Support\Arr;
class BookableFactory extends Factory
{
   

    public function definition()
    {
        $suffix = [
            'Villa',
            'House',
            'Cottage',
            'Luxury Villas',
            'Cheap House',
            'Rooms',
            'Cheap Rooms',
            'Luxury Rooms',
            'Fancy Rooms'
        ];


        return [
            'title'=>$this->faker->city . "  " . Arr::random($suffix),
            'description'=>$this->faker->text(),
        ];
    }
}
