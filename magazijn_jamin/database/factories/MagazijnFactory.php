<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Magazijn;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Magazijn>
 */
class MagazijnFactory extends Factory
{
    protected $model = Magazijn::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ProductId' => $this->faker->numberBetween(1, 13),
            'VerpakkingsEenheid' => $this->faker->randomFloat(1, 1, 10),
            'AantalAanwezig' => $this->faker->numberBetween(0, 1000),
            'IsActief' => $this->faker->boolean,
            'Opmerkingen' => $this->faker->optional()->sentence,
            'DatumAangemaakt' => Carbon::now(),
            'DatumGewijzigd' => Carbon::now(),
        ];
    }
}
