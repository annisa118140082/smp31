<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BeritaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Berita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $judul = $this->faker->words(5, true);

        return [
            'judul' => $judul,
            'isi' => $this->faker->paragraphs(10, true),
            'slug' => Str::slug($judul),
            'published_at' => $this->faker->dateTime()
        ];
    }
}
