<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition() {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->userName(),
            'email' => $this->faker->email(),
            'topic' => $this->faker->sentence(),
            'ip_address' => $this->faker->ipv6(),
            'street_address'=> $this->faker->streetAddress(),
            'address' => $this->faker->address,
            'author' => $this->faker->name(),
            'country' => $this->faker->country()
        ];
    }
}
