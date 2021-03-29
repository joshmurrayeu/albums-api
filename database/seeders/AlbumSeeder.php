<?php

namespace Database\Seeders;

use App\Concerns\UsesJsonPlaceholder;
use App\Models\Album;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Seeder;

/**
 * Class AlbumSeeder
 *
 * @package Database\Seeders
 */
class AlbumSeeder extends Seeder
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
            $albums = $this->getJsonPlaceholderClient()->albums();
        } catch (GuzzleException $guzzleException) {
            // There was an error getting the albums - exit.
            return;
        }

        // Get the JSON contents from the response and decode it to a assoc array
        $albums = json_decode($albums->getBody()->getContents(), true);

        // Loop through the albums and insert them to the database
        foreach ($albums as $album) {
            Album::factory()->create(
                [
                    'title' => $album['title'],
                    'user_id' => $album['userId'],
                ]
            );
        }
    }
}
