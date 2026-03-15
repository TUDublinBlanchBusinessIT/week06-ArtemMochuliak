<?php

namespace Database\Factories;

use App\Models\scorder;
use Illuminate\Database\Eloquent\Factories\Factory;

class scorderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = scorder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_number' => $this->faker->word,
        'customer_name' => $this->faker->word,
        'customer_email' => $this->faker->word,
        'total_price' => $this->faker->word,
        'status' => $this->faker->word
        ];
    }
}
