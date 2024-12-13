<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Leverancier;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leverancier>
 */
class LeverancierFactory extends Factory
{
    protected $model = Leverancier::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Naam' => $this->faker->name,
            'Contactpersoon' => $this->faker->name,
            'Leveranciernummer' => $this->faker->numberBetween(1, 99999999999),
            'Mobiel' => $this->faker->numberBetween(1, 99999999999),
            'IsActief' => $this->faker->boolean,
            'Opmerkingen' => $this->faker->optional()->sentence,
            'DatumAangemaakt' => Carbon::now(),
            'DatumGewijzigd' => Carbon::now(),
        ];
    }
}
