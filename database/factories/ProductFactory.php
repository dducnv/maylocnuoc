<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name'=>$this->faker->name(),
            'product_image'=>$this->faker->imageUrl(),
            'product_gallery'=>$this->faker->imageUrl(),
            'product_slug'=>$this->faker->slug(),
            'product_views'=>$this->faker->numberBetween(0,100),
            'product_sold'=>$this->faker->numberBetween(0,100),
            'product_tags'=>$this->faker->word(),
            'product_price'=>$this->faker->numberBetween(0,100),
            'product_desc'=>$this->faker->text(),
            'product_content'=>$this->faker->text(),
            'product_specification'=>$this->faker->text(),
            'product_status'=>$this->faker->numberBetween(0,1),
            'category_id'=>$this->faker->numberBetween(1,5),
            'brand_id'=>1,
        ];
    }
}
