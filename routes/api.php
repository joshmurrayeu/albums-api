<?php

use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;

JsonApiRoute::server('v1')
    ->prefix('v1')
    ->resources(
        function ($server) {
            $server->resource('albums', JsonApiController::class);
            $server->resource('users', JsonApiController::class);
        }
    );
