<?php

namespace App\JsonApi\V1\Albums;

use Illuminate\Http\Request;
use LaravelJsonApi\Contracts\Auth\Authorizer;

/**
 * Class AlbumAuthorizer
 *
 * @package App\JsonApi\V1\Albums
 */
class AlbumAuthorizer implements Authorizer
{
    /**
     * Authorize the index controller action.
     *
     * @param Request $request
     * @param string $modelClass
     *
     * @return bool
     */
    public function index(Request $request, string $modelClass): bool
    {
        return true;
    }

    /**
     * Authorize the store controller action.
     *
     * @param Request $request
     * @param string $modelClass
     *
     * @return bool
     */
    public function store(Request $request, string $modelClass): bool
    {
        return true;
    }

    /**
     * Authorize the show controller action.
     *
     * @param Request $request
     * @param object $model
     *
     * @return bool
     */
    public function show(Request $request, object $model): bool
    {
        return true;
    }

    /**
     * Authorize the update controller action.
     *
     * @param object $model
     * @param Request $request
     *
     * @return bool
     */
    public function update(Request $request, object $model): bool
    {
        return true;
    }

    /**
     * Authorize the destroy controller action.
     *
     * @param Request $request
     * @param object $model
     *
     * @return bool
     */
    public function destroy(Request $request, object $model): bool
    {
        return true;
    }

    /**
     * Authorize the show-related and show-relationship controller action.
     *
     * @param Request $request
     * @param object $model
     * @param string $fieldName
     *
     * @return bool
     */
    public function showRelationship(Request $request, object $model, string $fieldName): bool
    {
        return true;
    }

    /**
     * Authorize the update-relationship controller action.
     *
     * @param Request $request
     * @param object $model
     * @param string $fieldName
     *
     * @return bool
     */
    public function updateRelationship(Request $request, object $model, string $fieldName): bool
    {
        return true;
    }

    /**
     * Authorize the attach-relationship controller action.
     *
     * @param Request $request
     * @param object $model
     * @param string $fieldName
     *
     * @return bool
     */
    public function attachRelationship(Request $request, object $model, string $fieldName): bool
    {
        return true;
    }

    /**
     * Authorize the detach-relationship controller action.
     *
     * @param Request $request
     * @param object $model
     * @param string $fieldName
     *
     * @return bool
     */
    public function detachRelationship(Request $request, object $model, string $fieldName): bool
    {
        return true;
    }

}
