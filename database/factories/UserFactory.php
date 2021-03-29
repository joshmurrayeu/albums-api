<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;

/**
 * Class UserFactory
 *
 * @package Database\Factories
 */
class UserFactory extends Factory
{
    use WithFaker;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->makeFaker('en_GB');

        return [
            'name' => $faker->name,
            'username' => $faker->userName,
            'email' => $faker->safeEmail,
            'address' => explode(PHP_EOL, $faker->address),
            'phone' => $faker->phoneNumber,
            'website' => $faker->safeEmailDomain,
            'company' => ['name' => "{$faker->lastName} Industries"],
        ];
    }
}
