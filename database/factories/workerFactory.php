<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\worker>
 */
class workerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        $fakerID = faker::create('id_ID');
        return [
            'name' => $faker->name(),
            'umur'=> mt_rand(18,30),
            'nik' => $fakerID->nik,
            
        ];
    }
}
