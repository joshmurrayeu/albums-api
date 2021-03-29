<?php

namespace App\JsonApi\V1\Albums;

use App\JsonApi\V1\Schema;
use App\Models\Album;
use LaravelJsonApi\Eloquent\Fields\ID;
use LaravelJsonApi\Eloquent\Fields\Relations\BelongsTo;
use LaravelJsonApi\Eloquent\Fields\Str;

/**
 * Class AlbumSchema
 *
 * @package App\JsonApi\V1\Albums
 */
class AlbumSchema extends Schema
{
    /**
     * The model the schema corresponds to.
     *
     * @var string
     */
    public static string $model = Album::class;

    /**
     * Get the resource fields.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            ID::make(),

            BelongsTo::make('user'),

            Str::make('title'),
        ];
    }
}
