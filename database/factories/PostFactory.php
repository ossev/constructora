<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->sentence(4);
        return [
            'user_id' => rand(1,30),
            'category_id' => rand(1,20),
            'name' => $title,
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->text(200),
            'body' => $this->faker->text(500),
            'file' => $this->faker->imageUrl($width = 1200, $height = 400),
            'status' => $this->faker->randomElement(['DRAFT', 'PUBLISHED']),
        ];
    }
}
