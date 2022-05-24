<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title, '-');
        $users = User::pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($users),
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraph()
        ];
    }
}
