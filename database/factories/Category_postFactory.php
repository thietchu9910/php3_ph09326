<?php

namespace Database\Factories;

use App\Models\Category_post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Category_postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category_post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id'=>$this->faker->numberBetween(1,10),
            'cate_id'=>$this->faker->numberBetween(1,10),
            'status'=>$this->faker->numberBetween(0,1),
        ];
    }
}
