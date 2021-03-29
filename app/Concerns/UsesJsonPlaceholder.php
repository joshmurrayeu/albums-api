<?php

namespace App\Concerns;

use App\Services\JsonPlaceholder\Client;

/**
 * Trait UsesJsonPlaceholder
 *
 * @package App\Concerns
 */
trait UsesJsonPlaceholder
{
    /**
     * @var Client $jsonPlaceholderClient
     */
    protected Client $jsonPlaceholderClient;

    /**
     * @return Client
     */
    public function getJsonPlaceholderClient(): Client
    {
        if (!isset($this->jsonPlaceholderClient)) {
            $this->jsonPlaceholderClient = app(Client::class);
        }

        return $this->jsonPlaceholderClient;
    }
}
