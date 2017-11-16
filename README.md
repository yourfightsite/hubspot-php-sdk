# HubSpot PHP SDK
A PHP SDK for working with the [HubSpot API][1].

## Installation
This package can be installed via [Composer][4]:

    $ composer require yourfightsite/hubspot

The package is meant to be used in [Laravel 5][5] applications and comes with a
service provider that you can add to your **config/app.php** file:

```php
'providers' => [

    // Package Service Providers...
    YourFightSite\HubSpot\HubSpotServiceProvider::class,

],
```

You can then type-hint the HubSpot client class…

```php
use YourFightSite\HubSpot\Client as HubSpotClient;

class ContactsController extends Controller
{
    protected $client;

    public function __construct(HubSpotClient $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        return $this->client->contacts()->paginate();
    }
}
```

…Or inject and use an individual service directly:

```php
use YourFightSite\HubSpot\Services\Contact as ContactService;

class ContactsController extends Controller
{
    protected $contacts;

    public function __construct(ContactService $contacts)
    {
        $this->contacts = $contacts;
    }

    public function index()
    {
        return $this->contacts->paginate();
    }
}
```

## License
Licensed under the [MIT License][2].

## Issues
If you find a problem with this package, please create a new [GitHub Issue][3].

[1]: https://developers.hubspot.com/docs/overview
[2]: LICENSE.md
[3]: https://github.com/yourfightsite/hubspot-php-sdk/issues/new
[4]: https://getcomposer.org/
[5]: https://laravel.com/
