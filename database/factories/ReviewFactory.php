<?php

namespace Database\Factories;

use App\Http\Controllers\Bookables;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //generating the string id
            'id'=> Str::uuid(),
            'content'=> $this->faker->sentence(5,true),
            'rating'=> random_int(1,5)

           
            
        ];
    }
}
