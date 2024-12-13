<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Naam' => $this->faker->word,
            'Omschrijving' => $this->faker->sentence,
            'Prijs' => $this->faker->randomFloat(2, 1, 1000),
            'IsActief' => $this->faker->boolean,
            'Opmerkingen' => $this->faker->optional()->sentence,
            'DatumAangemaakt' => Carbon::now(),
            'DatumGewijzigd' => Carbon::now(),
        ];
    }
}
