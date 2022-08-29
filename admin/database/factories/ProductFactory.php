<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class ProductFactory extends Factory
{

    protected $model = Product::class ;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(30),
            'image' => $this->faker->imageUrl()
        ];
    }
}
