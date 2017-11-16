<?php

namespace YourFightSite\HubSpot\Services;

use YourFightSite\HubSpot\Client;

abstract class Service
{
    /**
     * The HubSpot client instance.
     *
     * @var \YourFightSite\HubSpot\Client
     */
    protected $client;

    /**
     * Create a new service instance.
     *
     * @param \YourFightSite\HubSpot\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
