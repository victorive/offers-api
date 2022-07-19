<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_title' => $this->faker->word(),
            'vendor_id' => $this->faker->randomDigitNotZero(),
            'price' => $this->faker->numberBetween(200, 600)
        ];
    }
}
