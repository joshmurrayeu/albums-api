<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\UsersController;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Routing\ResourceRegistrar;

JsonApiRoute::server('v1')
    ->prefix('v1')
    ->resources(
        function (ResourceRegistrar $server) {
            $server->resource('albums', AlbumsController::class)->readOnly();
            $server->resource('users', UsersController::class)->only('index', 'read', 'update');
        }
    );
