# CollingMedia\Infusionsoft\ECommerceApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loadOrderUsingGET**](ECommerceApi.md#loadOrderUsingGET) | **GET** /orders/{orderId} | Retrieve an Order
[**searchUsingGET1**](ECommerceApi.md#searchUsingGET1) | **GET** /orders | List Orders
[**searchUsingGET2**](ECommerceApi.md#searchUsingGET2) | **GET** /transactions | List Transactions
[**transactionByIdUsingGET**](ECommerceApi.md#transactionByIdUsingGET) | **GET** /transactions/{transactionId} | Retrieve a Transaction
[**transactionsForOrderUsingGET**](ECommerceApi.md#transactionsForOrderUsingGET) | **GET** /orders/{orderId}/transactions | Retrieve Order Transactions


# **loadOrderUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse20010Orders loadOrderUsingGET($order_id)

Retrieve an Order

Retrieves a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ECommerceApi();
$order_id = 789; // int | orderId

try {
    $result = $api_instance->loadOrderUsingGET($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->loadOrderUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| orderId |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20010Orders**](../Model/InlineResponse20010Orders.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsingGET1**
> \CollingMedia\Infusionsoft\Model\InlineResponse20010 searchUsingGET1($since, $until, $limit, $offset, $paid, $order, $contact_id, $product_id)

List Orders

Retrieves a list of all orders using the specified search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ECommerceApi();
$since = "since_example"; // string | Date to start searching from ex. `2017-01-01T22:17:59.039Z`
$until = "until_example"; // string | Date to search to ex. `2017-01-01T22:17:59.039Z`
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return
$paid = true; // bool | Sets paid status of items to return
$order = "order_example"; // string | Attribute to order items by
$contact_id = 789; // int | Returns orders for the provided contact id
$product_id = 789; // int | Returns orders containing the provided product id

try {
    $result = $api_instance->searchUsingGET1($since, $until, $limit, $offset, $paid, $order, $contact_id, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->searchUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **string**| Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **until** | **string**| Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]
 **paid** | **bool**| Sets paid status of items to return | [optional]
 **order** | **string**| Attribute to order items by | [optional]
 **contact_id** | **int**| Returns orders for the provided contact id | [optional]
 **product_id** | **int**| Returns orders containing the provided product id | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsingGET2**
> \CollingMedia\Infusionsoft\Model\InlineResponse20011 searchUsingGET2($since, $until, $limit, $offset, $contact_id)

List Transactions

Retrieves a list transactions for a given contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ECommerceApi();
$since = "since_example"; // string | Date to start searching from ex. `2017-01-01T22:17:59.039Z`
$until = "until_example"; // string | Date to search to ex. `2017-01-01T22:17:59.039Z`
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return
$contact_id = 789; // int | Returns transactions for the provided contact id

try {
    $result = $api_instance->searchUsingGET2($since, $until, $limit, $offset, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->searchUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **string**| Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **until** | **string**| Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]
 **contact_id** | **int**| Returns transactions for the provided contact id | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionByIdUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse20011Transactions transactionByIdUsingGET($transaction_id)

Retrieve a Transaction

Retrieves a single transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ECommerceApi();
$transaction_id = 789; // int | transactionId

try {
    $result = $api_instance->transactionByIdUsingGET($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->transactionByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| transactionId |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20011Transactions**](../Model/InlineResponse20011Transactions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionsForOrderUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse20011 transactionsForOrderUsingGET($order_id, $since, $until, $limit, $offset, $contact_id)

Retrieve Order Transactions

Retrieves a list of all transactions on a given order using the specified search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ECommerceApi();
$order_id = "order_id_example"; // string | orderId
$since = "since_example"; // string | Date to start searching from ex. `2017-01-01T22:17:59.039Z`
$until = "until_example"; // string | Date to search to ex. `2017-01-01T22:17:59.039Z`
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return
$contact_id = 789; // int | Returns transactions for the provided contact id

try {
    $result = $api_instance->transactionsForOrderUsingGET($order_id, $since, $until, $limit, $offset, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->transactionsForOrderUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| orderId |
 **since** | **string**| Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **until** | **string**| Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]
 **contact_id** | **int**| Returns transactions for the provided contact id | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

