<?php

namespace Database\Factories;

use App\Models\Plate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(3);
        return [
            'name' => $name,
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([12.5,25.2,29.4,61.04,48.97,51.74,30.0]),
            'type' => $this->faker->randomElement(['Pollo','Carne','Parrilladas','Anticucho','Postres','Bebidas']),
            'slug' => Str::slug($name),
        ];
    }
}
