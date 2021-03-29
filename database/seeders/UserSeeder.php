<?php

namespace Database\Seeders;

use App\Concerns\UsesJsonPlaceholder;
use App\Models\User;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Seeder;

/**
 * Class UserSeeder
 *
 * @package Database\Seeders
 */
class UserSeeder extends Seeder
{
    use UsesJsonPlaceholder;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fetch the data from the API
        try {
            $users = $this->getJsonPlaceholderClient()->users();
        } catch (GuzzleException $guzzleException) {
            // There was an error getting the users - exit.
            return;
        }

        // Get the JSON contents from the response and decode it to a assoc array
        $users = json_decode($users->getBody()->getContents(), true);

        // Loop through the users and insert them to the database
        foreach ($users as $user) {
            User::factory()->create(
                [
                    'name' => $user['name'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'address' => $user['address'],
                    'phone' => $user['phone'],
                    'website' => $user['website'],
                    'company' => $user['company'],
                ]
            );
        }
    }
}
