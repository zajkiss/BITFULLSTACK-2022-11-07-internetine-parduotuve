<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $photo_path = fake()->image(storage_path('/app/public'),1024,1024);
        $photo_path = pathinfo($photo_path);
        $photo_path = '/photos/' . $photo_path['basename'];
        return [
            'name'=> fake()->sentence(),
            'sku'=> fake()->ean13(),
            'photo'=> $photo_path,
            'warehouse_qty'=> rand(0,30),
            'price'=> rand(0,5000) . '.' . rand(0,99)
        ];
    }
}
