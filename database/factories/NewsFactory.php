<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str as Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(10);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'description' => $this->faker->sentence(15),
            'type_id' => 1,
            'content' => $this->faker->text(),
            'end' => $this->faker->date('Y-m-d'),
            'slug' => $slug
        ];
    }
}
