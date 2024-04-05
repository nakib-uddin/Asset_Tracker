<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Asset;
use App\Models\AssetType;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_type_id' => AssetType::inRandomOrder()->first()->id,
            'description' => $this->faker->sentence,
            'purchase_date' => $this->faker->date(),
            'purchase_price' => $this->faker->randomFloat(2, 100, 1000),
            'condition' => $this->faker->word,
            'location' => $this->faker->address,
            'used_by' => $this->faker->name,
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
        ];
    }
}
