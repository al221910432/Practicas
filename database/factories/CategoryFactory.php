<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'descripcion' => $this->faker->text(800),
            'image' => $this->faker->imageUrl(1280,720),
            'metatag' => $this->faker->text(7),
            'autor' => $this->faker->sentence,
            'date' =>$this->faker->datetime(),
            //declaramos la llaves foraneas
            'user_id' => rand(1,100),
            'category_id' => rand(1,100),
        ];
    }
}
