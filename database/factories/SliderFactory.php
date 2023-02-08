<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));

        return [

            'textUp' => fake()->name(),
            'textDown' => fake()->title,
            'link' => 'http://127.0.0.1:8000/',

            'photo' => 'images/' . $faker->image( 'public/storage/images',  1280,  720, false )
                //'images/' . $faker->image('public/storage/images',1280,720, null, false, ),

        ];
    }
}
