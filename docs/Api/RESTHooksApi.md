# CollingMedia\Infusionsoft\RESTHooksApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAHookSubscription**](RESTHooksApi.md#createAHookSubscription) | **POST** /hooks | Create a Hook Subscription
[**deleteAHookSubscription**](RESTHooksApi.md#deleteAHookSubscription) | **DELETE** /hooks/{key} | Delete a Hook Subscription
[**listHookEventTypes**](RESTHooksApi.md#listHookEventTypes) | **GET** /hooks/event_keys | List Hook Event Types
[**listStoredHookSubscriptions**](RESTHooksApi.md#listStoredHookSubscriptions) | **GET** /hooks | List Stored Hook Subscriptions
[**retrieveAHookSubscription**](RESTHooksApi.md#retrieveAHookSubscription) | **GET** /hooks/{key} | Retrieve a Hook Subscription
[**updateAHookSubscription**](RESTHooksApi.md#updateAHookSubscription) | **PUT** /hooks/{key} | Update a Hook Subscription
[**verifyAHookSubscription**](RESTHooksApi.md#verifyAHookSubscription) | **POST** /hooks/{key}/verify | Verify a Hook Subscription
[**verifyAHookSubscriptionDelayed**](RESTHooksApi.md#verifyAHookSubscriptionDelayed) | **POST** /hooks/{key}/delayedVerify | Verify a Hook Subscription, Delayed


# **createAHookSubscription**
> \CollingMedia\Infusionsoft\Model\InlineResponse2007 createAHookSubscription($rest_hook_request)

Create a Hook Subscription

To receive hooks, you'll first need to subscribe to events one at a time *and* individually verify each subscription.  This operation is used to create hook subscriptions. During this process, Infusionsoft will attempt to verify your subscription. Continue reading to learn how that works.  To verify or reactivate a hook subscription, Infusionsoft will make a `POST` request with a temporary secret to the `hookUrl` you provided during creation. The secret is passed as the value of a header named `X-Hook-Secret`. Your response to that `POST` *must* have a status code of `200` and return the same `X-Hook-Secret` header and value pair. Once you've done that, you'll begin receiving hooks. Don't worry if verification fails; you can always [request another verification attempt](#!/REST_Hooks/verify_a_hook_subscription).  NB: You will not receive events until the subscription is verified.  If the verification process seems confusing, head over to [RESTHooks.org](http://resthooks.org/docs/security/) for more on the concept.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\RESTHooksApi();
$rest_hook_request = new \CollingMedia\Infusionsoft\Model\RestHookRequest(); // \CollingMedia\Infusionsoft\Model\RestHookRequest | restHookRequest

try {
    $result = $api_instance->createAHookSubscription($rest_hook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RESTHooksApi->createAHookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rest_hook_request** | [**\CollingMedia\Infusionsoft\Model\RestHookRequest**](../Model/RestHookRequest.md)| restHookRequest |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAHookSubscription**
> deleteAHookSubscription($key)

Delete a Hook Subscription

Stop receiving hooks by deleting an existing hook subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\RESTHooksApi();
$key = "key_example"; // string | key

try {
    $api_instance->deleteAHookSubscription($key);
} catch (Exception $e) {
    echo 'Exception when calling RESTHooksApi->deleteAHookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listHookEventTypes**
> string[] listHookEventTypes()

List Hook Event Types

### _What are REST Hooks?_  _REST Hooks itself is not a specification, it is a collection of patterns that treat webhooks like subscriptions. These subscriptions are manipulated via a REST API just like any other resource._  _With most modern REST APIs, polling is the only way to detect changes. But it doesn't have to be. On average, 98.5% of polls are wasted. There is a better way. REST Hooks enable real-time communication and eliminate polling._ -- [RESTHooks.org](http://RESTHooks.org)  Infusionsoft offers a growing set of REST Hooks to keep you notified of changes in your data. To get started, use [List Hook Event Types](#!/REST_Hooks/list_hook_event_types) to discover event types. Event types are identified using _noun.verb dot syntax_, e.g.: `contact.add` or `invoice.delete`.  Once you've chosen the events you're interested in, subscribe to them via [Create a Hook Subscription](#!/REST_Hooks/create_a_hook_subscription).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\RESTHooksApi();

try {
    $result = $api_instance->listHookEventTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RESTHooksApi->listHookEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listStoredHookSubscriptions**
> \CollingMedia\Infusionsoft\Model\InlineResponse2007[] listStoredHookSubscriptions()

List Stored Hook Subscriptions

Lists your hook subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\RESTHooksApi();

try {
    $result = $api_instance->listStoredHookSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RESTHooksApi->listStoredHookSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAHookSubscription**
> \CollingMedia\Infusionsoft\Model\InlineResponse2007 retrieveAHookSubscription($key)

Retrieve a Hook Subscription

Retrieves an existing hook subscription and its status.  If your hook subscription becomes inactive, you may request an activation attempt via [Verify a Hook Subscription](#!/REST_Hooks/verify_a_hook_subscription).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\RESTHooksApi();
$key = "key_example"; // string | key

try {
    $result = $api_instance->retrieveAHookSubscription($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RESTHooksApi->retrieveAHookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAHookSubscription**
> \CollingMedia\Infusionsoft\Model\InlineResponse2007 updateAHookSubscription($key, $rest_hook_request)

Update a Hook Subscription

Modify an existing hook subscription using the provided values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\RESTHooksApi();
$key = "key_example"; // string | key
$rest_hook_request = new \CollingMedia\Infusionsoft\Model\RestHookRequest1(); // \CollingMedia\Infusionsoft\Model\RestHookRequest1 | restHookRequest

try {
    $result = $api_instance->updateAHookSubscription($key, $rest_hook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RESTHooksApi->updateAHookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |
 **rest_hook_request** | [**\CollingMedia\Infusionsoft\Model\RestHookRequest1**](../Model/RestHookRequest1.md)| restHookRequest |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyAHookSubscription**
> \CollingMedia\Infusionsoft\Model\InlineResponse2007 verifyAHookSubscription($key)

Verify a Hook Subscription

This operation is used to verify or reactivate a hook subscription using RESTHooks.org's [Immediate Confirmation](http://resthooks.org/docs/security/) pattern.  To verify or reactivate a hook subscription, Infusionsoft will make a `POST` request with a temporary secret to the `hookUrl` you provided during creation. The secret is passed as the value of a header named `X-Hook-Secret`. Your response to that `POST` *must* have a status code of `200` and return the same `X-Hook-Secret` header and value pair. Once you've done that, you'll begin receiving hooks. Don't worry if verification fails; you can always [request another verification attempt](#!/REST_Hooks/verify_a_hook_subscription).  NB: You will not receive events until the subscription is verified.  If the verification process seems confusing, head over to [RESTHooks.org](http://resthooks.org/docs/security/) for more on the concept.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\RESTHooksApi();
$key = "key_example"; // string | key

try {
    $result = $api_instance->verifyAHookSubscription($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RESTHooksApi->verifyAHookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyAHookSubscriptionDelayed**
> \CollingMedia\Infusionsoft\Model\InlineResponse2007 verifyAHookSubscriptionDelayed($key, $x_hook_secret)

Verify a Hook Subscription, Delayed

This operation is used to verify or reactivate a hook subscription out-of-band using RESTHooks.org's [Delayed Confirmation](http://resthooks.org/docs/security/) pattern.  Use this verification method if you're not able to use the Immediate Confirmation provided through [Create a Hook Subscription](#!/REST_Hooks/create_a_hook_subscription) or [Verify a Hook Subscription](#!/REST_Hooks/verify_a_hook_subscription). This operation allows you to confirm a subscription by manually sending us the `X-Hook-Secret` you received.  NB: **The `X-Hook-Secret` _must_ be passed as a _header_.**  Don't worry if verification fails; you can always [request another verification attempt](#!/REST_Hooks/verify_a_hook_subscription).  NB: You will not receive events until the subscription is verified.  If the verification process seems confusing, head over to [RESTHooks.org](http://resthooks.org/docs/security/) for more on the concept.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\RESTHooksApi();
$key = "key_example"; // string | key
$x_hook_secret = "x_hook_secret_example"; // string | X-Hook-Secret

try {
    $result = $api_instance->verifyAHookSubscriptionDelayed($key, $x_hook_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RESTHooksApi->verifyAHookSubscriptionDelayed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key |
 **x_hook_secret** | **string**| X-Hook-Secret |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

