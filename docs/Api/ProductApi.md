# CollingMedia\Infusionsoft\ProductApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loadProductUsingGET**](ProductApi.md#loadProductUsingGET) | **GET** /products/{productId} | Retrieve a Product
[**searchUsingGET3**](ProductApi.md#searchUsingGET3) | **GET** /products/search | List Products
[**syncUsingGET1**](ProductApi.md#syncUsingGET1) | **GET** /products/sync | Retrieve Synced Products


# **loadProductUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse20012Products loadProductUsingGET($product_id)

Retrieve a Product

Retrieves a single product from the authorized Infusionsoft account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ProductApi();
$product_id = 789; // int | productId

try {
    $result = $api_instance->loadProductUsingGET($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->loadProductUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| productId |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20012Products**](../Model/InlineResponse20012Products.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsingGET3**
> \CollingMedia\Infusionsoft\Model\InlineResponse20012 searchUsingGET3($limit, $offset, $active)

List Products

Retrieves a list of all products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ProductApi();
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return
$active = true; // bool | Sets status of items to return

try {
    $result = $api_instance->searchUsingGET3($limit, $offset, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->searchUsingGET3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]
 **active** | **bool**| Sets status of items to return | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncUsingGET1**
> \CollingMedia\Infusionsoft\Model\InlineResponse20013 syncUsingGET1($sync_token, $limit, $offset)

Retrieve Synced Products

The Sync endpoint returns a set of products that have been updated or created since the last result set was retrieved, minus any products that have been deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ProductApi();
$sync_token = "sync_token_example"; // string | sync_token
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return

try {
    $result = $api_instance->syncUsingGET1($sync_token, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->syncUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_token** | **string**| sync_token | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

