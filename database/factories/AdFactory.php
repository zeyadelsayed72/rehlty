<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> User::inRandomOrder()->first()->id,
            'category_id'=> Category::inRandomOrder()->first()->id,
            'city_id'=> City::inRandomOrder()->first()->id,
            'title_ar'=> $this->faker->sentence(3),
            'title_en'=> $this->faker->sentence(3),
            'description_ar'=> $this->faker->paragraph(),
            'description_en'=> $this->faker->paragraph(),
            'price'=> $this->faker->numberBetween(100, 10000),
            'show_price'=> $this->faker->boolean(),
            'type'=> $this->faker->randomElement(['normal', 'featured']),
            'image'=> null,
            'whatsapp'=> $this->faker->phoneNumber(),
            'phone'=> $this->faker->phoneNumber(),
        ];
    }
}
