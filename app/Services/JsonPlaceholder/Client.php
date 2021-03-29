<?php

namespace App\Services\JsonPlaceholder;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Client
 *
 * @package App\Services\JsonPlaceholder
 */
class Client
{
    /**
     * @var GuzzleClient $client
     */
    protected GuzzleClient $client;

    public function __construct()
    {
        $this->client = new GuzzleClient(
            [
                'base_uri' => 'https://jsonplaceholder.typicode.com',
            ]
        );
    }

    /**
     * @return ResponseInterface
     *
     * @throws GuzzleException
     */
    public function users(): ResponseInterface
    {
        return $this->client->get('users');
    }

    /**
     * @return ResponseInterface
     *
     * @throws GuzzleException
     */
    public function albums(): ResponseInterface
    {
        return $this->client->get('albums');
    }
}
