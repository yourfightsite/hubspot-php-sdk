<?php

namespace YourFightSite\HubSpot;

use GuzzleHttp\Client as GuzzleClient;

class Client extends GuzzleClient
{
    /**
     * Start a contacts API request.
     *
     * @return Contacts
     */
    public function contacts()
    {
        return new Services\Contacts($this);
    }
}
