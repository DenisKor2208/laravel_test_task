<?php

namespace Database\Factories;

use App\Models\NewsRoles;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsRolesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsRoles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'news_id' => $this->faker->numberBetween(1,20),
            'role_code' => $this->faker->numberBetween(1,5)
        ];
    }
}
