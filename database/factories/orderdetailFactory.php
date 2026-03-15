<?php

namespace Database\Factories;

use App\Models\orderdetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class orderdetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = orderdetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->randomDigitNotNull,
        'product_id' => $this->faker->randomDigitNotNull,
        'quantity' => $this->faker->randomDigitNotNull,
        'price' => $this->faker->word
        ];
    }
}
