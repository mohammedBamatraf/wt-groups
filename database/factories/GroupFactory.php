<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return   [
            'name'=> $this -> faker -> name(),
            'link' => $this -> faker -> word(),
            'views' => $this -> faker -> numberBetween(1,100000),
            'description' => $this -> faker -> text(),
            'social_type' => $this -> faker ->boolean(),
            'is_active' => $this -> faker ->boolean(),
            'category_id' =>null,
            'language_id' => null,
            'collection_id' => null,
        ];
    }
}
