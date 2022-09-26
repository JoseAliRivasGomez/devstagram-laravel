<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_ids = User::pluck('id');
        $post_ids = Post::pluck('id');
        return [
            'user_id' => fake()->randomElement($user_ids),
            'post_id' => fake()->randomElement($post_ids),
        ];
    }
}
