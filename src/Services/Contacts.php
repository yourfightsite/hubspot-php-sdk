<?php

namespace YourFightSite\HubSpot\Services;

use Illuminate\Pagination\Paginator;

class Contacts extends Service
{
    /**
     * List all contacts.
     *
     * @param  int  $page
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($page = 1)
    {
        $response = $this->client->get('contacts/v1/lists/all/contacts/all', [
            'query' => [
                'count' => $perPage = 20,
                'vidOffset' => ($page - 1) * $perPage,
            ],
        ]);

        $response = json_decode($response->getBody()->getContents(), true);

        return new Paginator($response['contacts'], $perPage, $page, [
            'hasMore' => (bool) $response['has-more'],
        ]);
    }
}
