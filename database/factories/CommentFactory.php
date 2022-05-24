<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $posts = Post::pluck('id')->toArray();
        return [
            'post_id' => $this->faker->randomElement($posts),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->domainName(),
            'comment' => $this->faker->paragraph()
        ];
    }
}
