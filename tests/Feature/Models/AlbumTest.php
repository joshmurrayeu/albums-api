<?php

namespace Tests\Feature\Models;

use App\Models\Album;

/**
 * Class AlbumTest
 *
 * @package Tests\Feature\Models
 */
class AlbumTest extends ModelTest
{
    /**
     * AlbumTest set-up.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Create an Album to run tests on
        $this->model = Album::factory()->make();
    }

    /**
     * @return void
     */
    public function testAssertTitleIsAString(): void
    {
        $this->assertTrue(
            is_string($this->model->title)
        );
    }

    /**
     * @return void
     */
    public function testAssertTitleIsThreeWordsByDefault(): void
    {
        $this->assertCount(3, explode(' ', $this->model->title));
    }
}
