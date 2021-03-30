<?php

namespace App\JsonApi\V1\Users;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

/**
 * Class UserRequest
 *
 * @package App\JsonApi\V1\Users
 */
class UserRequest extends ResourceRequest
{
    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        $userId = $this->validationData()['id'];

        return [
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => "required|string|unique:users,email,{$userId}",

            'address' => 'required|array',
            'address.geo' => 'required|array',
            'address.geo.lat' => 'required|numeric',
            'address.geo.lng' => 'required|numeric',

            'phone' => 'required|string',
            'website' => 'required|string',

            'company' => 'required|array',
            'company.bs' => 'required|string',
            'company.name' => 'required|string',
            'company.catchPhrase' => 'required|string',
        ];
    }
}
