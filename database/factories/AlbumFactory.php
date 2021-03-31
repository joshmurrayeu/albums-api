<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * Class AlbumFactory
 *
 * @package Database\Factories
 */
class AlbumFactory extends Factory
{
    use WithFaker;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->makeFaker('en_GB');

        return [
            'title' => $faker->words(3, true),
            'user_id' => rand(1, 10),
        ];
    }
}
