<?php

namespace App\JsonApi\V1\Users;

use App\JsonApi\V1\Schema;
use App\Models\User;
use LaravelJsonApi\Eloquent\Fields\ArrayHash;
use LaravelJsonApi\Eloquent\Fields\ID;
use LaravelJsonApi\Eloquent\Fields\Relations\HasMany;
use LaravelJsonApi\Eloquent\Fields\Str;

/**
 * Class UserSchema
 *
 * @package App\JsonApi\V1\Users
 */
class UserSchema extends Schema
{
    /**
     * The model the schema corresponds to.
     *
     * @var string
     */
    public static string $model = User::class;

    /**
     * Get the resource fields.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            ID::make(),

            HasMany::make('albums'),

            Str::make('name'),
            Str::make('username'),
            Str::make('email'),
            ArrayHash::make('address'),
            Str::make('phone'),
            Str::make('website'),
            ArrayHash::make('company'),
        ];
    }
}
