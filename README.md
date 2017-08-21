# Infusionsoft PHP SDK
Infusionsoft PHP API - an easy to use version of the PHP Infusionsoft API using GuzzleHTTP.

## Requirements

PHP 7.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/):

```
composer require collingmedia/infusionsoft-php-sdk
```


### Getting Started

Getting started is easy, you just have to pass the variables required to use the endpoints you want. For instance, the access token is not required if you are using the authorzation endpoints, but everything is required for any other request.

```php
<?php
$infusionsoft = new CollingMedia\Infusionsoft\Infusionsoft([
    'client_id' => '_YOUR_CLIENT_ID_',
    'client_secret' => '_YOUR_CLIENT_SECRET_',
    'redirect_uri' => '_YOUR_REDIRECT_URI_',
    'access_token' => '_YOUR_ACCESS_TOKEN_ARRAY_'
]);
```

### Authroization

Generate the URLs required, along with retreiving access tokens, and refreshing tokens.

####Setup
```php
<?php
$infusionsoft = new CollingMedia\Infusionsoft\Infusionsoft([
    'client_id' => '_YOUR_CLIENT_ID_',
    'client_secret' => '_YOUR_CLIENT_SECRET_',
    'redirect_uri' => '_YOUR_REDIRECT_URI_',
]);
```

##### Generate Authroization URL
This will return the URL required to authroize a user, and redirect them back to your application
```php
$url = $infusionsoft->authorize()->getAuthorizationUrl();
```

##### Get Token from Response Code
This will exchange the code variable in the URL on a redirect from Infusionsoft for an access token, verifying it against the `client_id`, `client_secret`, and `redirect_uri`.
```php
$code = $_GET['code'];
$token = $infusionsoft->authorize()->getToken($code);
```

##### Refresh Token
This will refresh the access token you have by sending the refresh code, and getting the response back.
```php
$refreshedToken = $infusionsoft->authorize()->refreshToken();
```


### Campaigns

Get, update, and delete campaigns.

####Setup
```php
<?php
$infusionsoft = new CollingMedia\Infusionsoft\Infusionsoft([
    'client_id' => '_YOUR_CLIENT_ID_',
    'client_secret' => '_YOUR_CLIENT_SECRET_',
    'redirect_uri' => '_YOUR_REDIRECT_URI_',
    'access_token' => '_YOUR_ACCESS_TOKEN_ARRAY_',
]);
```

##### List All Campaigns
This will return all of the campaigns in Infusionsoft, results are paginated.
```php
$campaigns = $infusionsoft->campaigns()->listCampaigns();
```

##### Get a Specific Campaign
This will return the campaign you specify by using the ID.
```php
$campaign = $infusionsoft->campaigns()->getCampaign($campaignId);
```


### Contacts

Get, update, and delete contacts.

####Setup
```php
<?php
$infusionsoft = new CollingMedia\Infusionsoft\Infusionsoft([
    'client_id' => '_YOUR_CLIENT_ID_',
    'client_secret' => '_YOUR_CLIENT_SECRET_',
    'redirect_uri' => '_YOUR_REDIRECT_URI_',
    'access_token' => '_YOUR_ACCESS_TOKEN_ARRAY_',
]);
```

##### List All Contacts
This will return all of the contacts in Infusionsoft, results are paginated.
```php
$campaigns = $infusionsoft->contacts()->listContacts();
```

##### Get a Specific Campaign
This will return the contact you specify by using the ID.
```php
$campaign = $infusionsoft->contacts()->getContact($contatId);
```
