<?php

namespace YourFightSite\HubSpot;

use Illuminate\Support\ServiceProvider;

class HubSpotServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            return new Client([
                'base_uri' => 'https://api.hubspot.com/',
                'query' => [
                    'hapikey' => $app['config']['services.hubspot.api_key'],
                ],
            ]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            Client::class,
        ];
    }
}
